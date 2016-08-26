@extends("layouts.default")
@section("content")
<div class="botao-pagina-principal">
    <p>Onde tem cerveja por perto?</p>
    <a  href="#modal1"><img src="img/logo.png" onclick="$('#modal1').openModal();"></a>
    <br>
    Clique para saber!
</div>
<div class="background-botao-pagina-principal"></div>
<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <div style="height:450px;width:500px;max-width:100%;list-style:none; transition: none;overflow:hidden;">
            <div id="gmap_display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Rua+Joubert+Guerra,+32+-+Ouro+Preto,+Belo+Horizonte+-+MG&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div>
            <a class="google-code" rel="nofollow" href="https://www.hostingreviews.website/wp-engine-review" id="enable-map-info">wp engine review</a>
            <style>#gmap_display img{max-width:none!important;background:none!important;}</style>
        </div>
        <script src="https://www.hostingreviews.website/google-maps-authorization.js?id=f1086c0e-5666-d962-3917-b5b54bf8ba7d&c=google-code&u=1472229934" defer="defer" async="async"></script>
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Fechar</a>
    </div>
</div>
@stop
