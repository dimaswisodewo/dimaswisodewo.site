<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    // Unity Function
    public function mathApp(Request $request)
    {
        return view('pages.math-app');
    }

    public function quizSpaceVr(Request $request)
    {
        return view('pages.quiz-space-vr');
    }

    public function gameLostInSpace(Request $request)
    {
        return view('pages.game-lost-in-space');
    }

    public function geoNaturalResourceApp(Request $request)
    {
        return view('pages.geonaturalresource-app');
    }

    public function ecoeduapp(Request $request)
    {
        return view('pages.ecoeduapp');
    }

    public function shootTheVirus(Request $request)
    {
        return view('pages.shoot-the-virus');
    }

    public function arMultiTarget(Request $request)
    {
        return view('pages.ar-multi-target');
    }

    public function arExtendedTracking(Request $request)
    {
        return view('pages.ar-extended-tracking');
    }
    public function gameDeliveryMan(Request $request)
    {
        return view('pages.game-delivery-man');
    }

    public function gameTetris(Request $request)
    {
        return view('pages.game-tetris');
    }

    public function gameBallDrive(Request $request)
    {
        return view('pages.game-ball-drive');
    }

    public function clickGame(Request $request)
    {
        return view('pages.click-game');
    }

    // Jupyter Notebook Function
}
