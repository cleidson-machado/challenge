@extends('layout.layout')

@section('content')
    <main class="app-main">
        <div class="wrapper">
            <div class="page has-sidebar has-sidebar-expand-lg">
                <div class="page-inner">
                    <header class="page-title-bar">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">
                                    <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Processos</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">123456</a>
                                </li>
                            </ol>
                        </nav>
                        <div class="d-md-flex align-items-md-start">
                            <h1 class="page-title mr-sm-auto"> 123456 </h1>
                        </div>
                        <div class="page-section">

                           
                            <a href="#" class="btn btn-outline-info">NNNNN</a>
                            <br>
                            <br>
                            <br>

                            <table class="border-collapse border border-slate-700 ...">
                                <thead>
                                  <tr>
                                    <th class="border border-slate-300 ...">ID</th>
                                    <th class="border border-slate-300 ...">SUMMARY</th>
                                    <th class="border border-slate-300 ...">PROCESS NUM</th>
                                    <th class="border border-slate-300 ...">REDACTOR</th>
                                    <th class="border border-slate-300 ...">TEXT</th>
                                    <th class="border border-slate-300 ...">DECISION</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($decisions as $decision )
                                  <tr>
                                    <td class="border border-slate-300 ...">{{$decision->id}}</td>
                                    <td class="border border-slate-300 ...">{{$decision->summary}}</td>
                                    <td class="border border-slate-300 ...">{{$decision->process_number}}</td>
                                    <td class="border border-slate-300 ...">{{$decision->redactor}}</td>
                                    <td class="border border-slate-300 ...">{{$decision->full_text}}</td>
                                    <td class="border border-slate-300 ...">{{$decision->decision}}</td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
    
                            <hr class="my-5">
    
                            <div class="section-block">
                                <h2 class="section-title"> Sumário </h2>
                                SSSSSSSS
                            </div>
    
                            <hr class="my-5">
    
                            <div class="section-block">
                                <h2 class="section-title"> Decisão </h2>
                                KKKKKKKK
                            </div>
    
                        </div>
                    </header>
                </div> 
                {{-- @include('decision.sidebar')  --}}
            </div>  
        </div>   
    </main>
@endsection

@section('css')
    <link rel='stylesheet' href='{{asset('css/bootstrap-select.min.css')}}' />
@endsection


@section('js')
<script src='{{asset('js/flatpickr.min.js')}}'></script>
<script src='{{asset('js/bootstrap-select.min.js')}}'></script>
@endsection
