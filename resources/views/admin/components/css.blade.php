 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <title>RiseInc Admin</title>
 <!-- plugins:css -->
 <link rel="stylesheet" href="{{ asset('admin') }}/vendors/mdi/css/materialdesignicons.min.css">
 <link rel="stylesheet" href="{{ asset('admin') }}/vendors/base/vendor.bundle.base.css">
 <!-- endinject -->
 <!-- plugin css for this page -->
 <link rel="stylesheet" href="{{ asset('admin') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
 <!-- End plugin css for this page -->
 <!-- inject:css -->
 <link rel="stylesheet" href="{{ asset('admin') }}/css/style.css">
 <!-- endinject -->
 <link rel="shortcut icon" href="https://riseglobalgroup.com/logoo.png" />
 <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>

 {{-- <script src="{{ asset('admin') }}/js/ckeditor.js"></script> --}}

 @stack('css')

 <style>
     textarea {
         resize: none;
     }

     #count_message {
         background-color: smoke;
         margin-top: -20px;
         margin-right: 5px;
     }

 </style>
