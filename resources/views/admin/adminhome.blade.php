@extends('admin.layout.master')
@section('content')
<script type="text/javascript">
    function ubahstatus(value)
    {
        if (value==true) value="On";
        else value="Off";
        document.getElementById('status').innerHTML = value; 
    }
    function ubahposisi(value)
    {
        document.getElementById('posisi').innerHTML = value; 
    }
    </script>
    <!-- container -->
    <div class="col-md-8 col-sm-12 bg-blue p-4">
        <div class="container" style="display: flex; justify-content:center ;padding-top:20px ">
            <!-- kartu relay -->
            <div class="card text-black mb-3" style="width: 20rem; margin-right: 10px">
                <div class="card-header" style="font-size:30px; text-align center; background-color: red; color: white">relay
                </div>
                <div class="card-body" style="background-color: white">
                    <div class="form-check form-switch" style="font-size: 50px">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" onchange="ubahstatus(this.checked)">
                        <label class="form-check-label" for="flexSwitchCheckDefault"> <span id="status">Off</span> </label>
                    </div>
                </div>
            <!-- akhir relay -->  
            </div>
            <!-- slider -->
            <div class="card text-black mb-3" style="width: 20rem;">
                <div class="card-header" style="font-size:30px; text-align center; background-color: blue; color: white">relay
                </div>
                <div class="card-body" style="background-color: white">
                    <div style="text-align: center" style="font-size: 18px">
                    <label for="customRange1" class="form-label" >posisi servo <span id="posisi">0</span> derajat</label>
                    <input type="range" class="form-range" id="customRange1" min="0" max="180" step="1" value="0" onchange="ubahposisi(this.value)">
                    </div>
                </div>
            </div>
            <!-- akhir slider -->
        </div>
    </div>
    <!-- logo -->
    <div class="container">

    </div>
    <!-- akhir logo -->
@endsection
