
<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
    <a class="navbar-brand" href="{{ config('app_name') }}">Library</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="margin-l">
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('dashboard-member') }}">Dashboard<span>|</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('member-books') }}">Books<span>|</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('contact-create') }}">Contact Admin<span>|</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@include('inc.flash-message')
<style>
    .margin-bottom{
        margin-bottom: 2rem;
    }
    span{
        margin-left: 1rem;
        color: white;
    }
    .margin-l{
        margin-left: 2rem;
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

</style>






