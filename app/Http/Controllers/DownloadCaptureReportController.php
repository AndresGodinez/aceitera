<?php

namespace App\Http\Controllers;

use App\CaptureGround;
use Illuminate\Http\Request;
use League\Csv\CannotInsertRecord;
use League\Csv\Writer;
use function dd;


class DownloadCaptureReportController extends Controller
{
    protected $writer;

    public function __construct()
    {
        $this->writer = Writer::createFromString('');
    }

    public function __invoke(Request $request)
    {
        $this->insertHeaders();
        $this->insertContent();

        return response()->streamDownload(function () {
            echo $this->writer->getContent();
        }, 'captureReport.csv', ['Content-Type' => 'text/csv; charset=utf-8']);
    }

    protected function insertHeaders()
    {
        $header = [
            'Nombre palmicultor',
            'Toneladas',
            'Fecha Captura',
            'Localidad',
            'Municipio',
            'Estado',
            'Latitud',
            'Longitud'
        ];

        try {
            $this->writer->insertOne($header);

        } catch (CannotInsertRecord $e) {
            dd([
                'error' => $e->getMessage()
            ]);
        }
    }

    protected function insertContent()
    {
        $capture = new CaptureGround();
        $captures = $capture->getInfoCapture();

        foreach ($captures as $capture) {
            $this->insertRow($capture);
        }
    }

    public function insertRow(CaptureGround $capture)
    {
        try {
            $this->writer->insertOne([
                $capture->ground->palmFarmer->name,
                $capture->tons,
                $capture->created_at,
                $capture->ground->location,
                $capture->ground->municipality->name,
                $capture->ground->state->name,
                $capture->ground->latitude,
                $capture->ground->longitude
            ]);
        } catch (CannotInsertRecord $e) {
            dd([
                'error' => $e->getMessage()
            ]);
        }
    }

}
