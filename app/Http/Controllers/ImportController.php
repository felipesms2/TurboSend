<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImportRequest;
use App\Http\Requests\UpdateImportRequest;
use App\Models\Import;

class ImportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    public function listFiles()
    {
        $countFile = 0;
        // $folderPath = '/root/d/projects/TelegramExports/bkp/';
        $folderPath = '/tmp/b/';
        // Get all files and folders in the specified folder
        $files = scandir($folderPath);
        // Remove . and .. from the list
        $files = array_diff($files, array('.', '..'));
        // Print the list of files
        // return $files;
        foreach ($files as $file)
        {
            echo "Começou $file \n";
            $this->insertData($file, $folderPath);
            $countFile++;
            echo "Terminou $file \n";
            if ($countFile>3)
            {
                //die
            }
        }
    }



    public function insertData($filename, $folderPath)
    {
         $file = fopen($folderPath . $filename ,"r");
        //  $file = fopen("/root/d/projects/TelegramExports/all/9.ext","r");


         if ($file) {
            fgets($file); // Ignore the first line
            $dataToInsert =[];

            while (($data = fgets($file)) !== false)
            {
                $row = str_getcsv($data); // Parse the line into an array
                // Do something with the row data
                $dataToInsert[] =
                [
                    "username" => $row[0],
                    "user_id" => $row[1],
                    "access_hash" => $row[2],
                    "name" => $row[3],
                    "group_name" => $row[4],
                    "group_id" => $row[5],
                ];
                // Example: Print the values
                foreach ($row as $value) {
                    // echo $value . ' ';
                }
                echo "\n";
            }
            foreach ($dataToInsert as $d) {
                $i = new Import;
                $iC = $i::create($d);
            }

            // dump($i::all());

    }
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreImportRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Import $import)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Import $import)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImportRequest $request, Import $import)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Import $import)
    {
        //
    }
}
