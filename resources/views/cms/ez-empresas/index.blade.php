@extends('cms.layouts.master', ['title' => __($module) ])

@section('content')
<div class="card">
  {{-- Cabeçalho --}}
  <div class="card-header bg-white">
    <x-breadcrumb :title="__($moduleTitle)" />
  </div>

  {{-- Conteúdo --}}
  <div class="card-body pt-0">

    <a href="/cms/empresas/new" class="mb-3 btn btn-primary">+ Nova Empresa</a>

    <x-table :table="$table"></x-table>
  </div>
</div>
@endsection
