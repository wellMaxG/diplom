<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'Страница вашего автомобиля';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'Страница добавления автомобиля';

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        return 'Запрос добавления автомобиля';

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return 'Страница просмотра автомобиля';

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return 'Страница измениния автомобиля';

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return 'Запрос измениния автомобиля';

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        return 'Страница удаления автомобиля';

    }
}
