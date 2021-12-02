<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Web Wanita, Web tentang Wanita, Web Bicara wanita, website tentang wanita, website wanita, website kesehatan, website gaya hidup, website ibu dan anak,bicara-wanita, Website, wanita bicara">
    <meta name="description" content="Bicara Wanita merupakan webiste yang membicarakan hal ehwal wanita secara menyeluruh. Mengadakan ceramah, latihan, bengkel, seminar dan sebagainya berkaitan wanita dan kewanitaan">
    <meta name="author" content="Ageng Subagja dan Faishol susilo permana">
    <title>Bicara Wanita</title>

    <!-- CSS Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <!-- CSS BOOSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- JS BOOSTRAP -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- link font roboto untuk font body -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- css icon navbar bawah -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!-- cript lazy load -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    
    <!-- favicon -->
    <link rel="icon" href="<?php echo base_url('favicon.ico'); ?>" sizes="16x16" />


<style>


    body {
        /* Font Roboto */
        font-family: 'Poppins', sans-serif;
    }

    /* css untuk footer */
    @media only screen and (min-width: 320px) {
    .foot {
            padding-left:0;
            padding-right:0;
            
        
        }

        .carousel-indicators{
            display:none;
        }
    
    }

    /* awal untuk tampilan hp*/
    @media only screen and (min-width: 320px) and (max-width: 767px) {

    /* css untuk dropdown */
    .drop {
            width:320px;
            
        
        }

    /*css untuk navbar atas agar tidak muncul  */
    .nav1{
        display:none;
    }

    /* css navbar bawah */
    .nav {
        position: fixed;
        bottom: 0;
        width: 100%;
        height: 60px;
        box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
        background-color: #ffffff;
        z-index: 100;
        display: flex;
        /* overflow-x: auto; */
    }

    .nav__link {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        flex-grow: 1;
        min-width: 50px;
        overflow: hidden;
        white-space: nowrap;
        font-family: sans-serif;
        font-size: 13px;
        color: #444444;
        text-decoration: none;
        -webkit-tap-highlight-color: transparent;
        transition: background-color 0.1s ease-in-out;
    }

    .nav__link:hover {
        background-color: #eeeeee;
    }

    /* .nav__link--active {
        color: #009578;
    } */

    .nav__icon {
        font-size: 18px;
    }

    /* akhir css navbar bawah */
    
    }

     /* awal css untuk ukuran handphone*/
     @media only screen and (min-width: 320px) and (max-width: 767px) {

        /* css untuk mengecilkan text judul vidio */
        .jdvid{
            font-style: normal; 
            font-weight: 600; 
            font-size: 1.25em; 
            text-transform: capitalize;
        }

         /* css untuk judul vidio di halaman isi vidio */
         .jvid{
            margin-top: 0.5em;
        }

        /* css untuk gambar vidio dihalaman isi vidio */
        .gvid{
            margin-top: 1.69em;
        }


        /* css untuk menurukan konten isi vidio */
        .isvi{
            margin-top: 1.3em;
        }

        /* css untuk mengecilkan text vidio one minute */
        .one{
            font-size:1.2em;
            font-weight:600;
        }

        /* csss untuk menurunkan card audio */
        .audio{
            margin-top: 1.3em;
        }

        
        /* css untuk text daftar audio */
        .dft{
            margin-top: 1.3em;
        }

        /* css untuk card kategori agar turun */
        .ktg{
            margin-top: 1.2em;
        }

        /* css untuk padding bottom footer */
        .foott{
            padding-bottom: 15%;
        }

        /* css untuk judul program */
        .judul2 {
                font-size: 15px;
                font-weight: 600;
                letter-spacing: 0.9px;
                
            
            }

        /*css untuk judul artikel */
        .judul1 {
                font-size: 18px;
                font-weight: 500;
                letter-spacing: 1px;
                
            
            }

        /* css untuk judul detail blog */
        .dblog{
            text-transform:capitalize; font-style: normal; font-weight: 600; font-size: 1.25em; color: #333333;
            line-height: 1.4em;
        }

        /* css untuk text judul podcast */
        .jdlpdcs{
            font-size:0.9375em
        }

        /* css untuk text daftar podcast */
        .dft{
            font-size: 1.3em;
            font-weight: 600;
        }

        /* css untuk text infografik di halaman detail infografik */
        .ifg{
            font-size:1.35em;font-weight:600;
        }

        /* css untuk judul di halaman detail program */
        .jdlp{
            font-family: Poppins; font-style: normal; font-weight: 600; font-size: 1.25em; color: #333333;
            line-height: 1.4em;
        }

        /* css untuk text judul artikel infografik*/
        .jdlinfo{
            font-family: Poppins; font-style: normal; font-weight: 600; font-size: 1.25em; color: #333333;
            line-height: 1.4em;
        }

        /* css untuk text judul story di halaman artikel story */
        .jdlsty{
            text-transform:capitalize; font-family: Poppins; font-style: normal; font-weight: 600; font-size:1.25em; color: #333333;
            line-height: 1.4em;
        }
    }

     /* css text desktop / monitor */
     @media only screen and (min-width: 768px) {
         
        /*css untuk mengecilkan text judul vidio */
        .jdvid{
            font-style: normal; 
            font-weight: 600; 
            font-size: 1.5em; 
            text-transform: capitalize;
        }

        /* css untuk judul vidio di halaman isi vidio */
        .jvid{
            margin-top: 1.2em;
        }

        /* css untuk gambar vidio dihalaman isi vidio */
        .gvid{
            margin-top: 1.51em;
        }

         /* css untuk menurukan konten isi vidio */
         .isvi{
            margin-top: 6em;
        }

        /* css untuk text vidio one minute */
        .one{
            font-size:1.873em; 
            font-weight:600;
        }

        /* css untuk parallax di detail vidio */
        .vid{
            margin-top: 3em;
        }

        /* css untuk menurunkan parallax story */
        .sty{
            margin-top: 3em;
        }

         /* csss untuk menurunkan card audio */
         .aud{
            margin-top: 6em;
        }

        /* css untuk text daftar audio */
        .dft{
            margin-top: 3em;
        }

        /* css untuk margin top carosul agar tidak masuk ke navbar */
        .mt{
            margin-top: 3em;
        }

        /* css untuk navbar bawah */
        .nav2{
            display:none;
        }

         /* css untuk judul program */
        .judul2 {
            /* font-family: Roboto; */
            font-style: normal; 
            font-weight: 600; 
            font-size: 23px; 
            line-height: 56px;
            text-align: center;
            color:#333;
            letter-spacing: 1px;
        }

         /*css untuk judul artikel */
        .judul1 {
            font-weight: 500;
            letter-spacing: 1px;
        }

        /* css untuk text judul detail podcast */
        .jdlpdcs{
            text-transform: capitalize; font-style: normal; font-weight: 500; font-size: 1.21em; line-height: 33px;
        }

        /* css untuk text daftar podcast */
        .dft{
            font-size: 1.7em;
            font-weight: 600;
        }

         /* css untuk judul detail blog */
         .dblog{
            text-transform:capitalize; font-style: normal; font-weight: 600; font-size: 1.5em; color: #333333;
            margin-top: 3em;
           
        }

        /* css untuk text infografik di halaman detail infografik */
        .ifg{
            font-size:1.875em;font-weight:600;
        }

        /* css untuk judul di halaman detail program */
        .jdlp{
            font-family: Poppins; font-style: normal; font-weight: 600; font-size: 1.5em; color: #333333;
            margin-top: 3em;
        }

        /* css untuk text judul artikel infografik*/
        .jdlinfo{
            font-family: Poppins; font-style: normal; font-weight: 600; font-size: 1.5em; color: #333333;
            margin-top: 3em;
        }

        /* css untuk text judul story di halaman artikel story */
        .jdlsty{
            text-transform:capitalize; font-family: Poppins; font-style: normal; font-weight: 600; font-size:1.5em; color: #333333;
            margin-top: 3em;
        }

        /* css untuk menurunkan card kategori */
        .ktg{
            margin-top: 7.5em;
        }
       

    }

    /* awal css text */
     /*css untuk judul artikel */
    @media only screen and (min-width: 320px) and (max-width: 767px) {
     /*css untuk judul artikel */
    .judul {
            text-transform: capitalize; 
            font-style: normal;
            font-weight: 600; 
            font-size: 16px;
            letter-spacing: 1px; 
            
        
        }
    
    }
    /* css text tab */
     /*css untuk judul artikel */
    @media only screen and (min-width: 768px) and (max-width: 991px) {
         /*css untuk judul artikel */
        .judul {
            color:black; 
            overflow: hidden; 
            text-overflow: ellipsis; 
            display: -webkit-box; -webkit-line-clamp: 2;
            line-clamp: 2; -webkit-box-orient: vertical;
            /* font-family: Roboto;  */
            font-style: normal;
            font-weight: 600; 
            font-size: 21px; 
            line-height: 28px;
            letter-spacing: 1px;

        }
    
    }
    /* css text destok */
     /*css untuk judul artikel */
    @media only screen and (min-width: 992px) {
         /*css untuk judul artikel */
        .judul {
            overflow: hidden; 
            text-overflow: ellipsis; 
            display: -webkit-box; -webkit-line-clamp: 2;
            line-clamp: 2; -webkit-box-orient: vertical;
            text-transform: capitalize; 
            /* font-family: Roboto;  */
            font-style: normal;
            font-weight: 600; 
            font-size: 23px; 
            line-height: 28px;

        }
         /*css untuk judul program */
        .judul2{
            font-size:28px
        }
    
    }
    
        
</style>
<!-- akhir css judul -->
</head>
<body>