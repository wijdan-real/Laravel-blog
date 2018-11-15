<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $chart = Charts::create('bar', 'fusioncharts')
            // Setup the chart settings
            ->title("Admin Glucose Level")
            // A dimension of 0 means it will take 100% of the space
           ->dimensions(1000, 500) // Width x Height
            // This defines a preset of colors already done:)
            ->template("teal-material")
            // You could always set them manually
            // ->colors(['#2196F3', '#F44336', '#FFC107'])
            // Setup the diferent datasets (this is a multi chart)
            // Setup what the values mean
            ->labels(['Fasting', 'BeforeDinner', 'AfterDinner','BeforeLunch','AfterLunch','Midnight'])
              ->values([5,10,15,17,20,25]);

        return view('admin.welcomeadmin',['chart' => $chart]);  }  }

        //, ['chart' => $chart]);


        /* $chart = Charts::create('line', 'highcharts')
             ->setView('custom.line.chart.view') // Use this if you want to use your own template
             ->setTitle('My nice chart')
             ->setLabels(['First', 'Second', 'Third'])
             ->setValues([5,10,20])
             ->setDimensions(1000,500)
             ->setResponsive(false);
         // return view('welcomeadmin',compact(chart));
        */






