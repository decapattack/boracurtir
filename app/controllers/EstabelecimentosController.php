<?php

class EstabelecimentosController extends \BaseController {

    /**
     * Display a listing of estabelecimentos
     *
     * @return Response
     */
    public function index()
    {
        $estabelecimentos = Estabelecimento::all();

        return View::make('estabelecimentos.index', compact('estabelecimentos'));
    }

    /**
     * Show the form for creating a new estabelecimento
     *
     * @return Response
     */
    public function create()
    {
        return View::make('estabelecimentos.create');
    }

    /**
     * Store a newly created tipoestabelecimento in storage.
     *
     * @return Response
     */
    public function store()
    {
        $validator = Validator::make($data = Input::all(), Estabelecimento::$rules);

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        Estabelecimento::create($data);

        return Redirect::route('estabelecimentos.index');
    }

    /**
     * Display the specified tipoestabelecimento.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $estabelecimento = Estabelecimento::findOrFail($id);

        return View::make('estabelecimentos.show', compact('estabelecimento'));
    }

    /**
     * Show the form for editing the specified tipoestabelecimento.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $estabelecimento = Estabelecimento::find($id);

        return View::make('estabelecimentos.edit', compact('estabelecimento'));
    }

    /**
     * Update the specified tipoestabelecimento in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $estabelecimento = Estabelecimento::findOrFail($id);

        $validator = Validator::make($data = Input::all(), Estabelecimento::$rules);

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $estabelecimento->update($data);

        return Redirect::route('estabelecimentos.index');
    }

    /**
     * Remove the specified tipoestabelecimento from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Estabelecimento::destroy($id);

        return Redirect::route('estabelecimentos.index');
    }

}
