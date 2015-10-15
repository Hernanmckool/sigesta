@extends('layouts.admin')
    @section('content')
    @include('usuario.profile')
          @include('usuario/form/index')
    @endsection
    @section('scripts')
        {!!Html::script('plugins/select2/select2.full.min.js')!!}
        {!!Html::script('plugins/input-mask/jquery.inputmask.js')!!}
        {!!Html::script('plugins/input-mask/jquery.inputmask.date.extensions.js')!!}
        {!!Html::script('plugins/input-mask/jquery.inputmask.extensions.js')!!}
        {!!Html::script('plugins/fastclick/fastclick.min.js')!!}
        {!!Html::script('js/script.js')!!}
        {!!Html::script('js/profile.js')!!}
    @endsection