<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
    <a class="navbar-brand" href="{{ config('app_name') }}">Library</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="margin-l">
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('dashboard-admin') }}">Dashboard<span>|</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('members-admin') }}">Members<span>|</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('books.index') }}">Books<span>|</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('borrow.index') }}">Borrow</a>
            </li>
        </ul>
    </div>
    </div>
</nav>
@include('inc.flash-message')
<style>
    span{
        margin-left: 1rem;
        color: white;
    }
    .margin-bottom{
        margin-bottom: 2rem;
    }
    .margin-books{
        margin-left: 9rem;
    }
    .margin-l{
        margin-left: 2rem;
    }
    .margin-tab{
        margin-left: 12rem;
    }
     .margina{
         margin-top: 25px;
         margin-left: 30px;
         margin-right: 30px;
     }

     .delete-button {
         background-color:red;
         border-radius:12px;
         border:1px solid black;
         display:inline-block;
         cursor:pointer;
         color:#ffffff;
         font-family:Arial;
         font-size:17px;
         padding:13px 22px;
         text-decoration:none;
         text-shadow:0px 1px 0px black;
     }
    .delete-button:hover {
        background-color:black;
    }
    .delete-button:active {
        position:relative;
        top:1px;
    }
    .create-button {
        background-color:forestgreen;
        border-radius:12px;
        border:1px solid black;
        display:inline-block;
        cursor:pointer;
        color:#ffffff;
        font-family:Arial;
        font-size:17px;
        padding:13px 22px;
        text-decoration:none;
        text-shadow:0px 1px 0px black;
    }
    .create-button:hover {
        background-color:black;
        color: white;
        text-decoration:none;
    }
    .create-button:active {
        position:relative;
        top:1px;
    }
    .edit-button {
        background-color:royalblue;
        border-radius:12px;
        border:1px solid black;
        display:inline-block;
        cursor:pointer;
        color:#ffffff;
        font-family:Arial;
        font-size:17px;
        padding:13px 22px;
        text-decoration:none;
        text-shadow:0px 1px 0px black;
    }
    .edit-button:hover {
        background-color:black;
        color: white;
        text-decoration:none;
    }
    .edit-button:active {
        position:relative;
        top:1px;
    }
    .view-button {
        background-color:deepskyblue;
        border-radius:12px;
        border:1px solid black;
        display:inline-block;
        cursor:pointer;
        color:#ffffff;
        font-family:Arial;
        font-size:17px;
        padding:13px 22px;
        text-decoration:none;
        text-shadow:0px 1px 0px black;
    }
    .view-button:hover {
        background-color:black;
        color: white;
        text-decoration:none;
    }
    .view-button:active {
        position:relative;
        top:1px;
    }
    h2{
        margin-left: 20px;
        margin-top: 30px;
    }

    #myInput {
        background-image: url('/css/searchicon.png');
        background-position: 10px 10px;
        background-repeat: no-repeat;
        width: 100%;
        font-size: 16px;
        padding: 12px 20px 12px 40px;
        border: 1px solid #ddd;
        margin-bottom: 12px;
    }

    #myTable {
        border-collapse: collapse;
        width: 100%;
        border: 1px solid #ddd;
        font-size: 18px;
    }

    #myTable th, #myTable td {
        text-align: left;
        padding: 12px;
    }

    #myTable tr {
        border-bottom: 1px solid #ddd;
    }

    #myTable tr.header, #myTable tr:hover {
        background-color: #f1f1f1;
    }
</style>
<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>








