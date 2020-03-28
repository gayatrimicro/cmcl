 <?php session_start();
include('db.php');
include('message.php');
// include('db.php');
?>

<!DOCTYPE html>
<html lang="en-us">
   <!--<![endif]-->
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta class="foundation-mq-small">
      <meta class="foundation-mq-small-only">
      <meta class="foundation-mq-medium">
      <meta class="foundation-mq-medium-only">
      <meta class="foundation-mq-large">
      <meta class="foundation-mq-large-only">
      <meta class="foundation-mq-xlarge">
      <meta class="foundation-mq-xlarge-only">
      <meta class="foundation-mq-xxlarge">
      <meta class="foundation-data-attribute-namespace">
      <meta http-equiv="X-UA-Compatible" content="IE=EDGE">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="google-site-verification" content="awE1dsMJ1ZQOBayzEK7uM0I1d_lqnwh9bCAfCpoJ7Cw" />
      <title>Medical Care Center: Unique Curative Consultation | CMC Lancaster</title>
      <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KBTCQX6');</script>
<!-- End Google Tag Manager -->
      <!-- favicon & links -->
      <link rel="shortcut icon" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/favi/favicon.ico" type="image/x-icon">
    
      

      <script src="assets/js/instafeed.min.js"></script>
 <link rel="apple-touch-icon" sizes="57x57" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/favi/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/favi/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/favi/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/favi/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/favi/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/favi/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/favi/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/favi/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/favi/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/favi/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/favi/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/favi/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/favi/favicon-16x16.png">
<script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/identity.js" async=""></script>
<script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/1761272287222885" async=""></script>
      
        <style type="text/css">
      body {
         font-family: 'PT Sans', sans-serif;
         }
      </style>
      <meta name="description" content="At Crescent Medical Center Lancaster we offer Unique Curative Consultation. A Complete medical facility for you and your entire family with extended hours and services. We provide the best Surgical & Specialty Services including emergency, heart, podiatry, orthopedic care, & other medical services">
      <meta property="og:description" content="At Crescent Medical Center Lancaster we offer Unique Curative Consultation. A Complete medical facility for you and your entire family with extended hours and services. We provide the best Surgical & Specialty Services including emergency, heart, podiatry, orthopedic care, & other medical services">
      <meta property="og:title" content="Medical Care Center: Unique Curative Consultation | CMC Lancaster">
      <meta property="og:url" content="https://cmclancaster.com/">
      <meta property="og:type" content="website">
      <meta property="og:site_name" content="CMC Lancaster">
      <meta name="twitter:card" content="summary">
      <meta name="twitter:title" content="Medical Care Center: Unique Curative Consultation | CMC Lancaster"  >
      <meta name="twitter:description" content="At Crescent Medical Center Lancaster we offer Unique Curative Consultation. A Complete medical facility for you and your entire family with extended hours and services. We provide the best Surgical & Specialty Services including emergency, heart, podiatry, orthopedic care, & other medical services" >

      <link rel="canonical" href="https://cmclancaster.com/">
      <link rel="stylesheet" type="text/css" href="../assets/css/footer.css">

      <link rel="alternate" href="https://cmclancaster.com/" hreflang="en-us" />
      
      
      <style type="text/css">
         dl.variation, dl.variation p
         {  font-size: .875rem !important;
         letter-spacing: 1px;
         line-height: 16px;
         margin-bottom: 2%; 
         }
         .order-total .amount::before { 
         content: "AUD";
         margin-bottom:20%;
         padding-right:2px;
         font-size:80%;
         }
         .order-total .includes_tax .amount::before { 
         content: "";
         margin-bottom:0;
         padding-right:0px;
         font-size:100%;
         }
         .woocommerce-checkout .checkout-submit-button .disclaimer {
         -webkit-box-sizing: content-box;
         -moz-box-sizing: content-box;
         box-sizing: content-box;
         width: auto;
         padding: 28px;
         overflow: hidden;
         border: 2px solid #eee;
         text-align: left;
         -o-text-overflow: ellipsis;
         text-overflow: ellipsis;
         margin-top: -15px;
         }
         .woocommerce-checkout .checkout-submit-button p:first-child:before{
         content: 'Terms & Conditions \A';
         white-space: pre; /* or pre-wrap */
         color: #261c02;
         cursor: pointer;
         font-weight: 700;
         line-height: 2.2;
         margin-bottom: 0;
         text-transform: uppercase;
         margin-bottom:15px;
         }
         .datagrid table { 
         border-collapse: collapse; 
         text-align: left; 
         width: 100%; } 
         .datagrid {
         overflow: hidden; 
         }
         .datagrid table td, .datagrid table th { 
         padding: 10px 10px; 
         }
         .datagrid table tbody td { 
         }
         .datagrid table tbody .alt td { background: #E1EEF4; 
         color: #00496B; 
         }
         .datagrid table tbody td:first-child { 
         border-left: none; 
         }
         .datagrid table tbody tr:last-child td {
         border-bottom: none; 
         }




/* my custom stylesheet from here*/
  
  .ul-list{
    
     list-style-type: none;
     display: block;
     margin:0px;
     position: relative;
     padding: 0px;

  }
.custom-back{

  background:#04244a;
  padding: 40px;

}

.custom-back-back{
  background:#04244a;
  padding: 40px;

}

.li-list{
  list-style-type: none;
  color: #909195;
  display: block;
  margin:0px;
  line-height:33px;
}

.text-white-new{

  color:#909195;
  font-size: 19px;
}


.small-address{

  font-size:17px;
  color:#909195;
}

.footer-link{

  color:#909195;
}

.footer-link:hover{

  color:#909195;
}


.subscribe-social .icon {
    display: inline-block;
    vertical-align: middle;
    font-size: 2.2rem;
    color: inherit;
}



.icon {
    font-family: 'streamline' !important;
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

a {
    color: #34aff1;
    line-height: inherit;
}

.subscribe-social .icon {
    display: inline-block;
    vertical-align: middle;
    font-size: 2.2rem;
    color: inherit;
}
.subscribe-social .icon {
    display: inline-block;
    vertical-align: middle;
    font-size: 2.2rem;
    color: inherit;
}
.icon {
    font-family: 'streamline' !important;
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    margin: 3px;
}

.mt{margin-top: 13px;}
.iBridge{

  color: #34aff1;
}

.iBridge:hover{

  color: #34aff1;
}

.inline-inline-links{

  font-size:20px !important;
  padding: 10px;
}
.pipes{

  font-size:20px;
}


.inline-links{

  padding:112px;
  padding-bottom: 10px;
}

.instaf{


  line-height: 32px !important;
}

.instagram, .youtube{

    position: relative;
    top: 9px;
}


.instagram:before {
    content: "\f16d";
    line-height: 23px;
}

.youtube:before {
    content: "\f16d";
    line-height: 23px;
}

.padding{

  position: relative;
  bottom:10px;
}


.footer-link:first-child{

  padding-left:0px;
}


.page-banner .page-banner-social a {
    font-size: 2.2rem !important;
}


/*.icon {
    font-family: 'streamline' !important;
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    font-size: 33px;
    color:gray !important;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}*/


/*.icon-facebook-with-circle:before {
    content: "\e910";
    color: aliceblue;
}

.icon-twitter-with-circle:before {
    content: "\e910";
    color: aliceblue;
}

.icon-linkedin-with-circle:before {
    content: "\e910";
    color: aliceblue;
}

a {
    color: #34aff1;
    line-height: inherit;
}*/

@media only screen and (max-width: 768px){

.text-center{

  padding-top:20px;
}

}


@media only screen and (max-width: 600px){

.text-center{

  padding-top:20px;
}

.inline-links {
    padding: 0px;
    padding-bottom: 10px;
}

.icon{

  text-align: center !important;
}

.text-left{

  
    position: relative;
    left: 0px !important;
}


}
.content-block-content2{
  padding: 80px 20px !important;
  float: left;
  margin-bottom: 0px !important;
}

@media only screen and (max-width: 1440px){

.content-block-content2{
  padding: 40px 20px !important;
  float: left;
  margin-bottom: 0px !important;
}

}


.sub-title1{
  color: #fff;
  font-size: 1.75rem !important;
  font-weight: 500;
  text-transform: uppercase;
  clear: both;
  margin-bottom: 0px !important;

}
.sub-title2{
  color: #fff;
  font-size: 1.75rem !important;
  font-weight: 500;
  text-transform: uppercase;
  clear: both;
  margin-bottom: 0px !important;

}
.content-block-full-backdrop1 {
    background-size: cover;
    text-align: center;
    /* position: relative; */
    width: 100%;
  }
  .title1{
    clear: both;
    margin-bottom: 0px !important;
  }

  .text1{
    color: #fff;
  }











      </style>


      <style type="text/css">
            dl.variation, dl.variation p
            {  font-size: .875rem !important;
            letter-spacing: 1px;
            line-height: 16px;
            margin-bottom: 2%; 
            }
            .order-total .amount::before { 
            content: "AUD";
            margin-bottom:20%;
            padding-right:2px;
            font-size:80%;
            }
            .order-total .includes_tax .amount::before { 
            content: "";
            margin-bottom:0;
            padding-right:0px;
            font-size:100%;
            }
            .woocommerce-checkout .checkout-submit-button .disclaimer {
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            width: auto;
            padding: 28px;
            overflow: hidden;
            border: 2px solid #eee;
            text-align: left;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            margin-top: -15px;
            }
            .woocommerce-checkout .checkout-submit-button p:first-child:before{
            content: 'Terms & Conditions \A';
            white-space: pre; /* or pre-wrap */
            color: #261c02;
            cursor: pointer;
            font-weight: 700;
            line-height: 2.2;
            margin-bottom: 0;
            text-transform: uppercase;
            margin-bottom:15px;
            }
            .datagrid table { 
            border-collapse: collapse; 
            text-align: left; 
            width: 100%; } 
            .datagrid {
            overflow: hidden; 
            }
            .datagrid table td, .datagrid table th { 
            padding: 10px 10px; 
            }
            .datagrid table tbody td { 
            }
            .datagrid table tbody .alt td { background: #E1EEF4; 
            color: #00496B; 
            }
            .datagrid table tbody td:first-child { 
            border-left: none; 
            }
            .datagrid table tbody tr:last-child td {
            border-bottom: none; 
            }
            .mar-3rem{
              margin: 3rem 0px !important;
            }
         </style>
       <!-- Calandar -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <!--  <link href="assets/vanillaCalendar.css" rel="stylesheet"> -->
      <style>
      

      
      .button:hover{
         text-decoration: none;
      }
      .button:focus{
         text-decoration: none;
      }
      a:hover{
         text-decoration: none;
      }
      a:focus{
         text-decoration: none;
      }
   </style>
  
      <!-- /SEO Ultimate -->
      <link rel="dns-prefetch" href="https://ajax.googleapis.com/">
      <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
      <link rel="stylesheet" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/styles.css">
      <link rel="stylesheet" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/jquery-ui.min.css">
      <link rel="stylesheet" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/frontend.css">
      <link rel="stylesheet" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/woocommerce-layout.css">
      <link rel="stylesheet" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/woocommerce-smallscreen.css" media="only screen and (max-width: 768px)">
      <link rel="stylesheet" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/style.css">
      <link rel="stylesheet" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/style(1).css">
      <link rel="stylesheet" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/css">
      <link rel="stylesheet" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/lightcase.css">
      <!-- <link rel="stylesheet" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/main.min.css"> -->
      <link rel="stylesheet" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/main.min.css">
      <!-- <link rel="stylesheet" href="assets/css/main.min.css"> -->
      <link rel="stylesheet" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/frontend(1).css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/menu.css">
      <!-- responsive  -->
      <style>
        @media screen and (min-width: 1920px){
            .content-block-image{
                height: 700px !important;
                background-position: center !important;
            }
            .page-banner .page-banner-content h1 span{     margin-top: 120px;}
        }
        @media only screen and (min-width: 768px) and (max-width: 1024px){
            .content-block-left-image-content .content-block-image{
               background-position: center !important;
               height: 600px !important;
               min-height: 600px !important;
            }
            .content-block-content-right-image .content-block-image,
            .content-block-left-image-content .content-block-image{
                width: 100%;
            }
            .content-block-left-image-content .content-block-content-wrap{
                width: 100%;
            }
        }
      </style>
      <!-- /responsive  -->
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/jquery.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/jquery-migrate.min.js"></script>
      <script type="text/javascript">
         /* <![CDATA[ */
         var mailchimp_public_data = {"site_url":""};
         /* ]]> */
      </script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/mailchimp-woocommerce-public.min.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/script.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/modernizr.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/client-detect.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/lightcase.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/frontend.js"></script>
      <meta name="referrer" content="always">
      <script type="text/javascript">
         window.ajaxurl = '';
      </script>
      <script type="text/javascript">
        function delayer(){
            $('#bg-image-2').css({'background-image':'url(https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/02.jpg)'});
            $('#bg-image-3').css({'background-image':'url(https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/03.jpg)'});
            $('#bg-image-4').css({'background-image':'url(https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/04.jpg)'});
        }
      </script>

 <!-- hospital schema -->
 <script type="application/ld+json">
{
  "@context": "https://schema.org",
    "@type": "Hospital",
    "address": {
    "@type": "PostalAddress",
        "addressLocality": "Lancaster",
        "addressRegion": "TX",
        "postalCode": "75146",
        "streetAddress": "2600 W Pleasant Run Rd"
        
  },
    "location": {
    "@type": "Place",
        "geo": {
      "@type": "GeoCoordinates",
            "latitude": "32.602923",
            "longitude": "-96.812492"
      }
    },
    "image": "https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/Neurology.jpg",
    "description": "CMC Lancaster providing the best emergency, oncology, heart, pediatric, orthopedic care, & other medical services",
    "name": "CMC Lancaster",
    "telephone": "469-609-3062",
    "logo": "https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/logo.png",
    "url": "https://cmclancaster.com/",
    "priceRange" : "$$$"
  }
</script>

<!-- organization schema -->
<script type="application/ld+json">
{
  "@context": {
    "@vocab": "http://schema.org/"
  },
  "@graph": [
    {
      "@id": "https://cmclancaster.com/",
      "@type": "Organization",
      "name": "CMC Lancaster",
      "url" : "https://cmclancaster.com/",
      "logo" : "https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/logo.png"
    },
    {
      "@type": "LocalBusiness",
      "parentOrganization": {
          "name" : "CMC Lancaster"
      },
     "name" : "CMC Lancaster",
      "address": {
          "@type" : "PostalAddress",
          "streetAddress": "2600 W Pleasant Run Rd",
          "addressLocality": "Lancaster",
          "addressRegion": "Texas",
          "postalCode": "TX 75146",
          "telephone" : "(972) 230-8888"
          },
      "openingHours": "24/7",
      "image": "https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/Neurology.jpg",
      "priceRange": "$$$" 
    }
    ]
    }
</script>

<!-- <style type="text/css">
  .home_popup {
    /*background-color: #fefefe;*/
    background-color: transparent;
    margin: auto;
    /*padding: 20px;*/
    /*border: 1px solid #888;*/
    width: 27%;
  }
  .home_pop_modal {
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        z-index: 1000;
  }
  .home_pop_close {
    color: #c9261d;
    float: right;
    font-size: 50px;
    font-weight: bold;
    position: relative;
    right: 6px;
    /* border: 3px solid black; */
    border-radius: 50%;
    padding: 4px;
    /* background-color: #fff; */
    top: 37px;
  }

  .home_pop_close:hover,
  .home_pop_close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }
  #google_translate_element{
    visibility: hidden;
  }
  #myModal::-webkit-scrollbar {
    width: 0px;
    background: transparent; /* make scrollbar transparent */
  }
  @media only screen and (max-width: 960px){ /*and (orientation : landscape){*/
    .home_popup{
      width: 86%;
    }
  }
  @media only screen and (max-width: 960px) and (orientation : landscape){ /*and (orientation : landscape){*/
    .home_popup{
      width: 40%;
    }
  }
  
</style> -->

<!-- <script>
  $(document).ready(function(){
      $(".home_pop_close").click(function(){
          $("#myModal").css('display','none');
          $("#google_translate_element").css('visibility','visible');
          // $(".home_popup").remove();
      });
  });
</script> -->
     <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '384637232098666');
fbq('track', 'PageView');
</script>
<noscript>
<img height="1" width="1"
src="https://www.facebook.com/tr?id=384637232098666&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
   </head>
   <body onload="setTimeout('delayer()',500);" class="home page-template page-template-template-home page-template-template-home-php page" style="">
      <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KBTCQX6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

 <!-- language translator header start-->
     <div id="translatediv"></div>
      <div class="outer-container">
        <div style="position:relative;">
           <header class="header desktop-menu desktop-menu-mega" id="main">
        
        </header>
        
        <header class="header mobile-menu" id="mobile">
        </header>

        <div id="google_translate_element"></div>

      </div>

     <!--  language translator header end -->
         <main id="main" class="main-content home-content" role="main">
            <section class="page-banner page-banner-landing full-page" style="min-height: 427px;">

               <div class="bg bg-image" style="background-image: url('assets/images/welcome_home.jpg');
                  background-position: 49% 20px;background-repeat: no-repeat;background-size: cover;"></div>
               <div class="row">
                  <div class="column">
                     <div class="page-banner-content">
                        <h1><span class="dotted-underline">Your Healing Journey Begins Here</span></h1>
                        
                     </div>
                  </div>
               </div>
               <div class="page-banner-social">
                <a href="https://business.facebook.com/cmcl.us/?business_id=852487431465578" target="_blank" rel="nofollow external" class="icon icon-facebook-with-circle"></a>
                     <a href="https://twitter.com/cmc_lancaster" target="_blank" rel="nofollow external" class="icon icon-twitter-with-circle"></a>
                     <a href="https://www.linkedin.com/company/crescent-medical-center-lancaster" target="_blank" rel="nofollow external" class="icon icon-linkedin-with-circle"></a>
                      <a href="https://www.youtube.com/channel/UCa5ZP98K2y_JrN00FDOlcdw?view_as=subscriber/" target="_blank" rel="nofollow external" class="icon"><i class="fa fa-youtube-play"></i></a>
                      <a href="https://www.instagram.com/CMC_Lancaster/" target="_blank" rel="nofollow external" class="icon"><i class="insta fa fab fa-instagram"></i></a>
                     
               </div>
            </section>
            <section class="showcase-region pad-l  grey-bg" style="padding-bottom: 0px !important">
              <div class="row">
                  <div class="showcase-content small-10 medium-8 small-centered columns">
                     <p class="h2 uppercase padding-bottom"><span class="dotted-underline">What Can We Help You Find?</span></p>
                     <!-- <p>At Crescent Medical Center Lancaster we offer the following surgical specialty services</p> -->
                      <div id="myModal" class="home_pop_modal">

                       <!--  <div class="home_popup">
                          <span class="home_pop_close">&times;</span>
                        <a href="https://business.facebook.com/cmcl.us/?business_id=852487431465578" target="_blank">  <img src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/xmass_popup.png"></a>
                        </div> -->
                      </div>
                  </div>
               </div>
               <style type="text/css">
                 .showcase-box-title {
                      font-size: 1.525rem;
                      color: #000;
                      font-weight: 700;
                      padding: 0 5% 5px;
                      text-transform: uppercase;
                      line-height: 30px;
                      letter-spacing: 1px;
                      /* text-shadow: 0 0 10px #000, 0 0 10px #000, 0 0 10px #000; */
                      transition: text-shadow .6s;
                      margin: 8px;
                  }
                  .small-desc{
                    font-size: 1rem !important;
                    display: block !important;
                  }
                  .mt-content{
                    margin-top: 35px !important;
                  }
                  .shake:hover {
                    width: auto;
                    height: auto;
                    position: relative;
                    -webkit-animation-name: example;
                    -webkit-animation-duration: 2s;  
                    -webkit-animation-iteration-count: infinite;
                    -webkit-animation-delay: 0s;
                    animation-name: example;
                    animation-duration: 2s;  
                    animation-iteration-count: infinite;
                    animation-delay: 0s;
                  }
                  .boxer{
                    width:130px;
                  }
                  /* Safari 4.0 - 8.0 */


                  @-webkit-keyframes example {
                    0%{ transform: rotate(0deg);}
                    10%{ transform: rotate(-5deg);}
                    20%{ transform: rotate(5deg);}
                    30%{ transform: rotate(0deg);}
                    40%{ transform: rotate(0deg);}
                    50%{ transform: rotate(-5deg);}
                    60%{ transform: rotate(5deg);}
                    70%{ transform: rotate(0deg);}
                    80%{ transform: rotate(0deg);}
                    90%{ transform: rotate(-5deg);}
                    95%{ transform: rotate(5deg);}
                    100%{ transform: rotate(0deg);}
                    
                    
                  }
                  @keyframes example {
                    0%{ transform: rotate(0deg);}
                    10%{ transform: rotate(-5deg);}
                    20%{ transform: rotate(5deg);}
                    30%{ transform: rotate(0deg);}
                    40%{ transform: rotate(0deg);}
                    50%{ transform: rotate(-5deg);}
                    60%{ transform: rotate(5deg);}
                    70%{ transform: rotate(0deg);}
                    80%{ transform: rotate(0deg);}
                    90%{ transform: rotate(-5deg);}
                    95%{ transform: rotate(5deg);}
                    100%{ transform: rotate(0deg);}
                    
                    
                  }
                  @keyframes example1 {
                    0%{ transform: rotate(0deg);}
                    10%{ transform: rotate(-5deg);}
                    20%{ transform: rotate(5deg);}
                    30%{ transform: rotate(-5deg);}
                    40%{ transform: rotate(5deg);}
                    50%{ transform: rotate(-5deg);}
                    60%{ transform: rotate(5deg);}
                    70%{ transform: rotate(-5deg);}
                    80%{ transform: rotate(5deg);}
                    90%{ transform: rotate(-5deg);}
                    95%{ transform: rotate(5deg);}
                    100%{ transform: rotate(0deg);}
                    
                    
                  }
               </style>
                <div class="row">
                  <div class="small-10 large-12 small-centered columns">
                     <ul class="showcase-card-grid" data-equalizer="" data-equalizer-mq="medium-up" data-options="equalize_on_stack: true">
                        <li style="position: relative;vertical-align: top;">
                           <!-- <a class="showcase-card" href="services/bariatric/" style="background-image: url(&quot;assets/images/Physican.png&quot;); height: 248px;" data-equalizer-watch=""> -->
                            <div><a href="/physician/">
                            <img src="assets/images/Physican.png" class="shake" style="height: 150px;">
                            </a>
                            </div>
                           <!-- </a> -->
                           <div class="mt-content">
                            <p class="showcase-box-title">FIND A DOCTOR</p>
                           <p class="small-desc">Find your doctor tool assists you in choosing from our diverse pool of health specialists.</p>
                           </div>
                        </li>
                        <li>
                          <!--  <a class="showcase-card" href="services/spinal-health/" style="background-image: url(&quot;assets/images/wound.jpg&quot;); height: 248px;" data-equalizer-watch="">
                             </a> --><div>
                              <a href="/Referral-forms/">
                             <img src="assets/images/Documents.png" class="shake" style="height: 150px;">
                             </a>
                             </div>
                           <div class="mt-content">
                           <p class="showcase-box-title">REFERRAL FORMS</p>
                           <p class="small-desc">To refer your patient to CMCL, complete the appropriate referral form. If you are a patient, please use our <a href="/C0NTACT_US/">appointment form.</a></p>
                           </div>
                        </li>
                        <li>
                           <!-- <a class="showcase-card" href="services/pain-management/" style="background-image: url(&quot;assets/images/pain.jpg&quot;); height: 248px;" data-equalizer-watch="">
                              </a> --><div>
                                <a href="/news/events/">
                              <img src="assets/images/Calendar.png" class="shake" style="height: 150px;">
                              </a>
                              </div>
                              <div class="mt-content">
                           <p class="showcase-box-title">CMCL EVENTS</p>
                           <p class="small-desc">CMCL promotes the health and well-being of the DFW community with many community events each month. Come and enjoy a day with us!</p>
                           </div>
                        </li>

                        
                        <p class="latest-news-cta">
                           <!-- <a href="services/" class="button small" style="margin-top: 5%;">VIEW ALL SERVICES</a> -->
                           &nbsp;
                        </p>
                     </ul>
                  </div>
               </div>
               <div style="background-color: #fff;">
               <div class="row" >
                  <div class="showcase-content small-10 medium-8 small-centered columns">
                     <p class="h2 uppercase padding-bottom mar-3rem"><span class="dotted-underline mar-3rem" style="margin-top: 20px;">SURGICAL SPECIALTIES</span></p>
                     <p>At Crescent Medical Center Lancaster we offer the following surgical specialty services</p>
                      <div id="myModal" class="home_pop_modal">

                       <!--  <div class="home_popup">
                          <span class="home_pop_close">&times;</span>
                        <a href="https://business.facebook.com/cmcl.us/?business_id=852487431465578" target="_blank">  <img src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/xmass_popup.png"></a>
                        </div> -->
                      </div>
                  </div>
               </div>
               <div >
                  <div class="small-10 large-12 small-centered columns">
                     <ul class="showcase-card-grid" data-equalizer="" data-equalizer-mq="medium-up" data-options="equalize_on_stack: true">
                        <li>
                           <a class="showcase-card" href="services/bariatric/" style="background-image: url(&quot;assets/images/Neurology.jpg&quot;); height: 248px;" data-equalizer-watch="">
                              <div class="showcase-card-content">
                                 <div class="showcase-card-inner">
                                    <p class="showcase-card-title">Bariatric</p>
                                    <p class="showcase-card-more">LEARN MORE</p>
                                 </div>
                              </div>
                           </a>
                        </li>
                        <li>
                           <a class="showcase-card" href="services/pain-management/" style="background-image: url(&quot;assets/images/pain.jpg&quot;); height: 248px;" data-equalizer-watch="">
                              <div class="showcase-card-content">
                                 <div class="showcase-card-inner">
                                    <p class="showcase-card-title">Pain Management</p>
                                    <p class="showcase-card-more">LEARN MORE</p>
                                 </div>
                              </div>
                           </a>
                        </li>
                        <li>
                           <a class="showcase-card" href="services/spinal-health/" style="background-image: url(&quot;assets/images/wound.jpg&quot;); height: 248px;" data-equalizer-watch="">
                              <div class="showcase-card-content">
                                 <div class="showcase-card-inner">
                                    <p class="showcase-card-title">SPINAL HEALTH</p>
                                    <p class="showcase-card-more">LEARN MORE</p>
                                 </div>
                              </div>
                           </a>
                        </li>
                        <li>
                           <a class="showcase-card" href="services/vascular-surgery/" style="background-image: url(&quot;assets/images/Orthopedic.jpg&quot;); height: 248px;" data-equalizer-watch="">
                              <div class="showcase-card-content">
                                 <div class="showcase-card-inner">
                                    <p class="showcase-card-title">Vascular Surgery </p>
                                    <p class="showcase-card-more">LEARN MORE</p>
                                 </div>
                              </div>
                           </a>
                        </li>
                        <p class="latest-news-cta">
                           <!-- <a href="services/" class="button small" style="margin-top: 5%;">VIEW ALL SERVICES</a> -->
                           &nbsp;
                        </p>
                     </ul>
                  </div>
               </div>
             </div>
            </section>
            <!-- <section class="call-to-action cta-full-width-content content-block content-block-full-backdrop1 " style="background-image: url(&#39;assets/images/family.jpg&#39;);
               background-position: 49% 60%;height: 45%;">
               <div class="row">
                  <div class="cta-content content-block-content2 small-10 large-8 small-centered column" >
                     <p class="sub-title2">Patient Stories</p>
                     <p class="title1"></p>
                     <div class="text1">
                        <p  style="margin-top: 2%;">Crescent Medical Center Lancaster sees over twelve thousand patients every year.<br/> Hear their real and inspiring stories.</p>
                        <p class="latest-news-cta">
                           <a href="stories" class="button small" style="margin-top: 2%;">VIEW STORIES</a>
                        </p><br>
                     </div>
                  </div>
               </div>
            </section> -->
            <!-- Modal Page  -->
          
            <section class="content-block content-block-left-image-content " data-equalizer="">
               <div class="content-block-content-wrap" data-equalizer-watch="" style="height: 414px;">
                  <div class="content-block-content"><br><br><br><br>
                     <!-- <p class="sub-title">We are here to serve you.</p> -->
                     <p class="title">ABOUT US</p>
                     <div class="text">
                        <p>
                           We are proud to have served Lancaster and the surrounding communities since 2013, celebrating our 5th anniversary this past June.
                        </p>
                        <p>
                           <a class="button small" href="about-us/">View More</a>
                        </p><br><br><br><br><br>
                     </div>
                  </div>
               </div>
               <div class="content-block-image" style="background-image: url(assets/images/home-about.jpg); background-position: 10% 70%; background-size: cover; height: 414px;" data-equalizer-watch=""></div>
            </section>
            <!-- Edit regions/_content-block-image-content -->
            <section class="content-block content-block-content-right-image  show-icon" data-equalizer="">
               <!-- Note: Extends regions/_content-block.scss "%content-block-content" -->
               <!-- This is used across a number of content blocks so be mindfull of this -->
               <!-- Note: the content is first in the DOM for a reason since it needs to display above on mobile use floats to reposition it on desktop -->
               <div class="content-block-content-wrap" data-equalizer-watch="" style="height: 501px;">
                  <div class="content-block-content">
                     <p class="sub-title">Contact Us</p>
                     <p class="title">Make an appointment</p>
                     <div class="text">
                        <p>
                           Please don't hesitate to contact us either by email or phone to schedule an appointment. We are available at any time day or night.
                        </p>
                        <p>
                           <a class="button small" href="C0NTACT_US/">LEARN MORE</a>
                        </p><br><br>
                     </div>
                  </div>
               </div>
               <div class="content-block-image" style="background-image: url(&quot;https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/appointment.jpg&quot;); background-position: 10% 70%; background-size: cover; height: 501px;" data-equalizer-watch=""></div>
            </section>
            <!-- <section class="latest-news-region pad-l  grey-bg show-icon">
               <div class="latest-news-region-inner">
                  <div class="row">
                     <div class="column latest-news-region-content">
                        <p class="h2"><span class="dotted-underline">Events </span></p>
                        <div class="latest-news-region-main-content">
                           <p>Keep up to date with all the latest events from Crescent Medical Center Lancaster.</p>
                        </div>
                        <ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-3" data-equalizer="" data-options="equalize_on_stack: true">
                           <?php 
                           $sql1=mysqli_query($conn,"SELECT * FROM `event_tbl` ORDER BY `time` DESC LIMIT 3");
                           if(mysqli_affected_rows($conn)){
                           while($sql=mysqli_fetch_array($sql1)){
                           ?>
                           <li>
                              <div class="news-card">
                                 <div class="card-content">
                                    <div class="card-inner" data-equalizer-watch="" style="height: 259px;">
                                       <p class="card-meta"><?php if(!empty($sql['event_date'])) echo date('d F Y',strtotime($sql['event_date']));?></p>
                                       <p class="card-title"><?php echo $sql['event_title'];?></p>
                                       <p>
                                         <img src="<?php echo '../../ad_crescent/assets/images/event/'.$sql['images'];?>" style="width: 300px;height:162px;">
                                       </p><br>
                                       <p class="card-excerpt"><?php echo substr($sql['event_details'],0,120);?>
                                       <p class="card-more"><a href="news/feb/?event_id=<?php echo rtrim(base64_encode($sql['event_id']),'==');?>">Read more</a></p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <?php }}?>
                          
                        </ul><br>
                        <p class="latest-news-cta">
                           <a href="news/events/" class="button small">VIEW ALL EVENTS</a>
                        </p>
                     </div>
                  </div>
               </div>
            </section> -->
            <style type="text/css">
                                .container-card {
                                  position: relative;
                                  width: 100%;
                                }

                                .bg-images {
                                  display: block;
                                  width: 100%;
                                  height: 300px;
                                }

                                .overlay-text {
                                  position: absolute; 
                                  bottom: 0; 
                                  background: rgb(0, 0, 0);
                                  background: rgba(0, 0, 0, 0.74); /* Black see-through */
                                  color: #f1f1f1; 
                                  width: 100%;
                                  transition: .5s ease;
                                  opacity:1;
                                  color: white;
                                  font-size: 18px;
                                  padding: 0px 20px 20px 20px;
                                  text-align: center;
                                }
                                .overlay-text .event-static{
                                  font-size: 12px;
                                    line-height:3;
                                    color: #d4d4d4;
                                }

                                .date-box {
                                  transition: .5s ease;
                                  opacity: 1;
                                  position: absolute;
                                  top: 15%;
                                  left: 85%;
                                  transform: translate(-50%, -50%);
                                  -ms-transform: translate(-50%, -50%);
                                  text-align: center;
                                }

                                .text-date {
                                  background-color: #ddd;
                                  color: #000;
                                  font-size: 16px;
                                  padding: 2px 16px;
                                }
                                .text-date .date-num{
                                  font-size:22px;
                                }
                              </style>
            <section class="latest-news-region grey-bg">
               <div class="latest-news-region-inner">
                  <div class="row">
                     <div class="column latest-news-region-content">
                        <!-- category list start hear -->
                        <p class="h2 mar-3rem"><span class="dotted-underline">Featured Events </span></p>
                        <div class="latest-news-region-main-content">
                           <!-- <p>Keep up to date with all the latest events from Crescent Medical Center Lancaster.</p> -->
                        </div>
                        <!-- category list end hear -->
                        <!-- blog listing start here -->
                          <ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-4" data-equalizer data-options="equalize_on_stack: true">
                           <?php 
                           $sql1=mysqli_query($conn,"SELECT * FROM `event_tbl` ORDER BY `event_date` DESC LIMIT 4 ");
                           if(mysqli_affected_rows($conn)){
                           while($sql=mysqli_fetch_array($sql1)){
                            // print_r($sql); exit();
                           ?>
                           <li>
                              <!-- <div class="news-card">
                                 <div class="card-content">
                                    <div class="card-inner" data-equalizer-watch>
                                       <p class="card-meta"><?php if(!empty($sql['event_date'])) echo date('d F Y',strtotime($sql['event_date']));?></p>
                                       <p class="card-title"><?php echo $sql['event_title'];?></p>
                                       <p>
                                         <img src="<?php echo '/development/space/CMCL-space-backup-13Sep/ad_crescent/assets/images/event/'.$sql['images'];?>" style="width: 300px;height:162px;">
                                       </p><br>
                                        <p class="card-excerpt">
                                          <?php echo substr($sql['event_details'],0,120);?>   
                                       </p> 
                                       <p class="card-more"><a href="../feb/?event_id=<?php echo rtrim(base64_encode($sql['event_id']),'==');?>">Read more</a></p>
                                    </div>
                                 </div>
                              </div> -->
                              <a href="/news/feb/?event_id=<?php echo rtrim(base64_encode($sql['event_id']),'==');?>">
                              <div class="container-card">
                                <img src="<?php echo 'https://cmclancaster.com/ad_crescent/assets/images/event/'.$sql['images'];?>" alt="Avatar" class="bg-images">
                                <div class="overlay-text">
                                  <span class="event-static">EVENTS</span>
                                  <br>
                                  <span class="event-name"><?php echo $sql['event_title'];?></span>
                                  
                                </div>
                                <div class="date-box">
                                  <div class="text-date"><?php if(!empty($sql['event_date'])) echo date('M',strtotime($sql['event_date']));?> <br> 
                                    <span class="date-num"><?php if(!empty($sql['event_date'])) echo date('d',strtotime($sql['event_date']));?></span></div>
                                </div>
                              </div>
                            </a>
                           </li>
                           <?php }}else{
                              echo "Data is Not Available";
                           }?>
                        </ul>
                       
                        <!-- blog listing end here -->
                        <div class="news-pagination"></div>
                         <a  href="news/events/"><button class="toggle-btn">DISCOVER MORE EVENTS </button></a>
                         
                     </div>
                  </div>
               </div>
            </section>
            <style type="text/css">
            .modal1 {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index:99999999 !important; /* Sit on top */
                padding-top: 100px; /* Location of the box */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
              }

              /* Modal Content */
              .modal-content1 {
                background-color: #fefefe;
                margin: auto;
                padding: 20px;
                border: 1px solid #888;
                width: 80%;
              }

              /* The Close Button */
              .close1 {
                color: #aaaaaa;
                float: right;
                font-size: 28px;
                font-weight: bold;
              }

              .close1:hover,
              .close1:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
              }
              .calendar-inner h1 span {
                  background: #fff;
                  padding: 0 20px;
                  text-align: center;
                }
                .calendar-inner h1+* {
                  border-top: solid 2px #000;
                  padding-top: 57px;
                  margin-top: -57px;
                }
                .calendar-inner h1{
                  text-align: center;
                }
                .calendar-section{
                width: 75%;
                margin: 0 auto;
                margin-bottom: 100px;
                
              }
              #calendar-section{
                display: none;
              }
              .toggle-btn{
                display: block;
                margin: 0 auto;
                margin-bottom: 80px;
              }
              #calendar-container {
            /*position: fixed;*/
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
          }

          .fc-header-toolbar {
            /*
            the calendar will be butting up against the edges,
            but let's scoot in the header's buttons
            */
            padding-top: 1em;
            padding-left: 1em;
            padding-right: 1em;
          }
            @media (max-width: 600px){
              .calendar-section{
                width: 100%;
                margin: 0 auto;
              }
              .calendar-inner h1+* {
                margin-top: -44px !important;
                padding-top: 15px !important;
              }
              .fc-left, .fc-center, .fc-right{
                margin: 10px 0;
              }
              .modal1 {
                
                padding-top: 80px;
              }


            }
            </style>
            
            <script type="text/javascript">
              function Toggle_Function() {
              var x = document.getElementById("calendar-section");
              if (x.style.display === "block") {
                x.style.display = "none";
              } else {
                x.style.display = "block";
              }
            }
            </script>
            <!-- The Modal -->
                <div id="myModal1" class="modal1">

                  <!-- Modal content -->
                  <div class="modal-content1 calendar-section">
                    <span class="close1">&times;</span>
                    <div class="calendar-inner">
                  <h1>
                    <span>Calendar</span>
                  </h1>
                  <div id='calendar-container'>
                    <div id='calendar'>
                      
                    </div>
                  </div>
                  </div>
                  </div>

                </div>
            <section id="calendar-section" class="calendar-section">


                
               
            </section>

            <script>
// Get the modal
var modal = document.getElementById("myModal1");

// Get the button that opens the modal
var btn = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


          <!--    <section class="call-to-action cta-full-width-content content-block content-block-full-backdrop " style="position: inherit !important;">
             
                <div class="row">
                  <div class="showcase-content small-10 medium-8 small-centered columns">
                     <p class="h2 uppercase padding-bottom"><span class="dotted-underline">See us live</span></p>
                    
                  </div>
               </div>
             <div class="ifvideo">
                  <iframe width="1440" height="544" src="https://www.youtube.com/embed/mzhilO-aiCw?rel=0" frameborder="0" allowfullscreen></iframe>

</div>
              
            </section> -->


 <!-- video section start -->
  <section class="showcase-region pad-l  grey-bg" style="    background: #fff !important;">
               <!-- <div class="row">
                  <div class="showcase-content small-10 medium-8 small-centered columns">
                     <p class="h2 uppercase padding-bottom"><span class="dotted-underline">See us</span></p>
                     
                  </div>
               </div> -->
               <div class="row">
                  <div class="small-10 large-12 small-centered columns">
                     <ul class="showcase-card-grid" data-equalizer="" data-equalizer-mq="medium-up" data-options="equalize_on_stack: true">
                        <li style="width: 100% !important;">

                            <div>

                              <iframe width="90%" height="60%" src="https://www.youtube.com/embed/_-VXCFygnfY?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


                 

</div>
                        
                        </li>
                        <!-- <li>

                            <div>

                              <iframe width="275" height="248" src="https://www.youtube.com/embed/tqOycwG9zIU?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


                

</div>
                        
                        </li>
                        <li>

                            <div>

                              <iframe width="275" height="248" src="https://www.youtube.com/embed/MLJihlZDAOE?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

</div>
                        
                        </li>
                        <li>

                            <div>
                              <iframe width="275" height="248" src="https://www.youtube.com/embed/VD5dH5h_a0k?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>hgfhgf</iframe>

                 

</div>
                        
                        </li> -->
                        <p class="latest-news-cta">
                           <a href="news/videos/" class="button small" style="margin-top: 5%;">VIEW ALL VIDEOS</a>
                        </p>
                     </ul>
                  </div>
               </div>
            </section>
 <!-- video section end -->
          
           
             <style type="text/css">
            .fl-r{
              float: right;
            }
            .fl-right{
              width: 50% !important;
              float: right;
              display: inline-block;
            }
            .fl-left{
              width: 50% !important;
              float: left;
              display: inline-block;
            }
            .wd-full{
              width: 80% !important;
            }
            @media (max-width: 1500px) and (min-width: 800px){
                        .desk-wd{
                          width: 80% !important;
                        }
                      }

            @media (max-width: 600px ){
              .fl-r{
                float: none;
              }
              .fl-right{
                width: 100% !important;
                display: block;
              }
              .fl-left{
                 width: 100% !important;
                 display: block;
              }
              .wd-full{
                width: 100% !important;
              } 
            }

             /* width: 50% !important;float: right;display: inline-block;*/
            </style>
            <section class="subscribe-region grey-bg">
               <div class="row">
                  <div class="column fl-left">
                     <p class="h2 uppercase padding-bottom" style="color: #33aff1;">Sign up for Our Newsletter</p>
                     <p style="font-size: 1rem;">Get expert insight on nutrition, health, wellness, get discounts on our medical services and be the first to know of our upcoming events.</p>
                    <!--  <p>Join us on our journey.</p> -->
                    </div>
                    <div class="column fl-right">
                     <div class="subscribe-form fl-r">
                        <div role="form" class="wpcf7" id="wpcf7-f857-o1" lang="en-US" dir="ltr">
                           <div class="screen-reader-response"></div>
                           <form action="/function.php" method="post" >
                              <div style="display: none;">
                                 <input type="hidden" name="_wpcf7" value="857" />
                                 <input type="hidden" name="_wpcf7_version" value="4.9.2" />
                                 <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                 <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f857-o1" />
                                 <input type="hidden" name="_wpcf7_container_post" value="0" />
                              </div>
                              <!-- <div class="subscribe-form-col">
                                 <span class="wpcf7-form-control-wrap first-name"><input type="text" required="" name="first_name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="First name" /></span>
                              </div>
                              <div class="subscribe-form-col">
                                 <span class="wpcf7-form-control-wrap last-name"><input type="text" required="" name="last_name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Last name" /></span>
                              </div> -->
                              <div class="desk-wd">
                                <div class="subscribe-form-col wd-full">
                                  <span class="wpcf7-form-control-wrap your-email"><input type="email" required="" name="email_id" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" /></span>
                                </div>
                                <div class="subscribe-form-col last">
                                   <input type="submit" name="submit" value="Subscribe Today" class="wpcf7-form-control wpcf7-submit button" />
                                </div>
                              </div>
                               <input type="hidden" name="act" value="subscribe_mail">
                              <input type="hidden" name="redirect" value="/"> 
                              <div class="wpcf7-response-output wpcf7-display-none"></div>
                           </form>
                        </div>
                     </div>
                   </div> 
                    <!-- <div class="subscribe-social">
                          <a href="https://business.facebook.com/cmcl.us/?business_id=852487431465578" target="_blank" rel="nofollow external" class="icon icon-facebook-with-circle"></a>
                     <a href="https://twitter.com/cmc_lancaster" target="_blank" rel="nofollow external" class="icon icon-twitter-with-circle"></a>
                     <a href="https://www.linkedin.com/company/crescent-medical-center-lancaster/about/" target="_blank" rel="nofollow external" class="icon icon-linkedin-with-circle"></a>
                      <a href="https://www.youtube.com/channel/UCa5ZP98K2y_JrN00FDOlcdw?view_as=subscriber/" target="_blank" rel="nofollow external" class="icon"><i class="youtubefooter fa fa-youtube-play"></i></a>

                      <a href="https://www.instagram.com/CMC_Lancaster/" target="_blank" rel="nofollow external" class="icon"><i class="instaf fa fab fa-instagram"></i></a>
                           <span class="subscribe-hash-tag">#CMCL</span>
                        </div> -->
                  
               </div>
            </section>

             <!-- <ul class="gallery-region">
               <li class="gallery-item" style="
                  background-image: url(https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/thumb.jpg);
                  background-position: 66% 18%;" data-href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/thumb_big.jpg" data-rel="lightcase:gallery-1262627095"></li>
               <li class="gallery-item" style="
                  background-image: url(&#39;https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/thumb1.jpg&#39;);
                  background-position: 50% 50%;" data-href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/thumb_big1.jpg" data-rel="lightcase:gallery-1262627095"></li>
               <li class="gallery-item" style="
                  background-image: url(&#39;https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/thumb_big2.jpg&#39;);
                  background-position: 50% 50%;" data-href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/thumb_big2.jpg" data-rel="lightcase:gallery-1262627095"></li>
               <li class="gallery-item" style="
                  background-image: url(&#39;https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/thumb3.jpg&#39;);
                  background-position: 50% 50%;" data-href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/thumb_big3.jpg" data-rel="lightcase:gallery-1262627095"></li>
                  <li class="gallery-item" style="
                  background-image: url(&#39;https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/thumb4.jpg&#39;);
                  background-position: 50% 50%;" data-href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/thumb_big4.jpg" data-rel="lightcase:gallery-1262627095"></li>
                  <li class="gallery-item" style="
                  background-image: url(&#39;https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/thumb5.jpg&#39;);
                  background-position: 50% 50%;" data-href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/thumb_big5.jpg" data-rel="lightcase:gallery-1262627095"></li>
              
            </ul> -->
            <div>
              <div  id="instafeed" class="row">
                  
              </div>
            </div>
         </main>
      

        <footer class="global-footer" id="footer" style="display: none !important;">



        
          </footer>
<script type="text/javascript">
    var feed = new Instafeed({
        get: 'user',
        tagName: 'awesome',
    userId:9215811265,
    resolution:'low_resolution',
    limit:4,
    sortBy:'most-recent',
    accessToken:'9215811265.97fe61f.22558f65becd47b8933c6b0e95d3770d',
        clientId: '97fe61f0bb824cb789798b2d7ff7de56',
    template: '<div class="insta-image-container"><a href="{{link}}" target="blank"><img src="{{image}}" style="display: inline-block;float: left;" class="img-fluid insta-image" /></a></div>'
    // ,
    // after: function () {
    //     $('.insta-image-container').slick();
    // }
    });
    feed.run();
</script>
        

 <!-- <div class="container-fluid p-2 custom-back">

<div class="row text-left">


<div class="col-md-6 col-sm-12 col-lg-4 col-xl-4">

    <div class="inner-address">
     <ul class="ul-list">

     <li class="li-list">Crescent Medical Center Lancaster</li>

     <li class="li-list">2600 W. Pleasant Run Rd.</li>

     <li class="li-list">Lancaster, TX 75146</li>

     <li class="li-list">

      <a class="footer-link iBridge" href="https://www.google.com/maps/place/Crescent+Medical+Center+Lancaster/@32.602923,-96.812492,16z/data=!4m5!3m4!1s0x0:0xa68c5e2cc2158de3!8m2!3d32.6029232!4d-96.8124921?hl=en-GB">Get Directions</a>

    </li>

</ul>

</div>

  </div>



  <div class="col-md-6 col-sm-12 col-lg-4 col-xl-4">



    <div class="inner-address">

     <ul class="ul-list">
     <li class="li-list"><a href="#" class="footer-link">Monday - Sunday</a></li>
     <li class="li-list"><a href="#" class="footer-link">Open 24/7</a></li>
     <li class="li-list"><a href="tel:9722308888" class="iBridge footer-link" class="footer-link iBridge">(972) 230-8888</a></li>
     
    </ul>

    </div>


  </div>



</div>

</div>



<div class="container-fluid p-2 custom-back">
  <div class="row">



    <div class="col-md-6 col-sm-12 col-lg-4 col-xl-4">

    <div class="inner-address">
     <ul class="ul-list">

     <li class="li-list">Crescent Medical Center O. R. HOPD</li>

     <li class="li-list">729 W. Bedford Rd.</li>

     <li class="li-list">Hurst, TX 76053</li>

     <li class="li-list">

      
    </li>

</ul>

</div>

  </div>



  <div class="col-md-6 col-sm-12 col-lg-4 col-xl-4">



    <div class="inner-address">

     <ul class="ul-list">
     <li class="li-list"><a href="#" class="footer-link">Monday - Friday</a></li>
     <li class="li-list"><a href="#" class="footer-link">7:30 A.M. - 3:00 P.M.</a></li>
     <li class="li-list"><a href="tel:8172821001" class="iBridge footer-link">(817) 282-1001</a></li>
     
    </ul>

    </div>


  </div>




  <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 text-center p-3" style="padding-top: 30px;">
    <div class="inline-links">
  
<a href="/your-care/" class="inline-inline-links footer-link">Your Care</a><span class="pipes">|</span>
<a href="/bill-rights/" class="inline-inline-links footer-link">Bill of Rights</a><span class="pipes">|</span>
<a href="/workers-comp/" class="inline-inline-links footer-link">Worker's Comp</a><span class="pipes">|</span>

<a href="/physician/" class="inline-inline-links footer-link">Physicians</a><span class="pipes">|</span>
<a href="/C0NTACT_US/" class="inline-inline-links footer-link">Contact Us</a><span class="pipes">|</span>
<a href="/news/" class="inline-inline-links footer-link">News & Events</a><span class="pipes">|</span>
<a href="/blog/" class="inline-inline-links footer-link">Blog</a>


</div>
</div>




<div class="col-sm-12 col-xl-6 col-lg-6 text-center" style="padding-top: 35px;">
   <div class="text-center clearfix">
  <div class="text-left" style="position: relative; left:0px;">Designed by <a href="https://ibridgedigital.com/" target="_blank" rel="nofollow">iBridge Digital</a></div>

  </div>
   </div>



   <div class="col-sm-12 col-xl-6 col-lg-6" style="padding-top: 35px;">
   <div class="text-right clearfix padding">


    <a href="https://www.instagram.com/CMC_Lancaster/" target="_blank" rel="nofollow external" class="icon"><i class="instaf fa fab fa-facebook" style="color: #04244a;"></i></a>
    <a href="https://www.instagram.com/CMC_Lancaster/" target="_blank" rel="nofollow external" class="icon"><i class="instaf fa fab fa-twitter" style="color: #04244a;"></i></a>
    <a href="https://www.instagram.com/CMC_Lancaster/" target="_blank" rel="nofollow external" class="icon"><i class="instaf fa fab fa-instagram instagram" style="color: #04244a;"></i></a>
    <a href="https://www.instagram.com/CMC_Lancaster/" target="_blank" rel="nofollow external" class="icon"><i class="instaf fa fab fa-linkedin" style="color: #04244a;"></i></a>
    <a href="https://www.instagram.com/CMC_Lancaster/" target="_blank" rel="nofollow external" class="icon"><i class="instaf fa fab fa-youtube-play youtube" style="color: #04244a;"></i></a>
   
  
   </div>
   </div>


</div>
</div>
  -->


<!-- new container ends here !-->

<!-- <div class="container-fluid p-4 custom-back d-none" style="'display: none !important;">

<div class="row text-left">


  <div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">

    <div class="inner-address">
     <ul class="ul-list">

     <li class="li-list">Crescent Medical Center Lancaster</li>

     <li class="li-list">2600 W. Pleasant Run Rd.</li>

     <li class="li-list">Lancaster, TX 75146</li>

     <li class="li-list">

      <a class="footer-link iBridge" href="https://www.google.com/maps/place/Crescent+Medical+Center+Lancaster/@32.602923,-96.812492,16z/data=!4m5!3m4!1s0x0:0xa68c5e2cc2158de3!8m2!3d32.6029232!4d-96.8124921?hl=en-GB">Get Directions</a>

    </li>

</ul>

</div>

  </div>



  <div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">



    <div class="inner-address">

     <ul class="ul-list">
     <li class="li-list"><a href="#" class="footer-link">Monday - Sunday</a></li>
     <li class="li-list"><a href="#" class="footer-link">Open 24/7</a></li>
     <li class="li-list"><a href="tel:8172821001" class="iBridge footer-link" target="_blank">(972) 230-8888</a></li>
     
    </ul>

    </div>


  </div>



  


  <div class="col-md-12 col-sm-12 col-lg-4 col-xl-4" style="visibility: hidden;">


   <div class="new-address">
        
        <h3 class="address text-white-new">Crescent Medical Center O.R. HOPD</h3>
        <p class="">729 W Bedford Euless Rd, Hurst, TX 76053</p>
       
      </div> 
 -->


    <!-- <div class="inner-address">

     <ul class="ul-list">
     <li class="li-list"><a href="#" class="footer-link">Your Care</a></li>
     <li class="li-list"><a href="#" class="footer-link">Bill of Rights</a></li>
     <li class="li-list"><a href="#" class="footer-link">Worker's Comp</a></li>
     <li class="li-list"><a href="#" class="footer-link">Physicians</a></li>
     <li class="li-list"><a href="#" class="footer-link">Contact Us</a></li>
     <li class="li-list"><a href="#" class="footer-link">News & Events </a></li>
     <li class="li-list"><a href="#" class="footer-link">Blog</a></li>
    </ul>

    </div>  -->


      




  <!-- </div> -->









  <!-- <div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">


    

    

 
  </div>


  <div class="col-md-12 col-sm-12 col-lg-4 col-xl-4" style="visibility: hidden !important;">
    
   <div class="inner-address">
     <ul class="ul-list">
     <li class="li-list">Wednesday &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 7:30 AM - 3:00 PM</li>
     <li class="li-list">Thurday &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 7:30 AM - 3:00 PM</li>
     <li class="li-list">Friday &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 7:30 AM - 3:00 PM</li>
     <li class="li-list">Saturday &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; closed</li>
     <li class="li-list">Sunday &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; closed</li>
     <li class="li-list">Monday &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 7:30 AM - 3:00 PM</li>
     <li class="li-list">Tuesday &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 7:30 AM - 3:00 PM</li>

 </ul>

<div class="mt">
 <p><a href="tel:(817) 282 1001" class="iBridge" target="_blank">(817) 282-1001</a></p>
</div>

</div>


  </div>






  <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 text-center">
    

<div class="inline-links">
  
<a href="/your-care/" class="inline-inline-links footer-link">Your Care</a><span class="pipes">|</span>
<a href="/bill-rights/" class="inline-inline-links footer-link">Bill of Rights</a><span class="pipes">|</span>
<a href="/workers-comp/" class="inline-inline-links footer-link">Worker's Comp</a><span class="pipes">|</span>

<a href="/physician/" class="inline-inline-links footer-link">Physicians</a><span class="pipes">|</span>
<a href="/C0NTACT_US/" class="inline-inline-links footer-link">Contact Us</a><span class="pipes">|</span>
<a href="/news/" class="inline-inline-links footer-link">News & Events</a><span class="pipes">|</span>
<a href="/blog/" class="inline-inline-links footer-link">Blog</a>


</div>



  </div>


</div>

</div> -->


<!-- <div class="container-fluid custom-back-back" style="display: none !important;">

  <div class="row">

   <div class="col-sm-12 col-xl-6 col-lg-6 text-center">
   <div class="text-center clearfix">
  <div class="text-center" style="position: relative; left:0px;">Designed by <a href="https://ibridgedigital.com/" target="_blank" rel="nofollow">iBridge Digital</a></div>

  </div>
   </div>



   <div class="col-sm-12 col-xl-6 col-lg-6">
   <div class="text-center clearfix padding">


    <a href="https://www.instagram.com/CMC_Lancaster/" target="_blank" rel="nofollow external" class="icon"><i class="instaf fa fab fa-facebook" style="color: #04244a;"></i></a>
    <a href="https://www.instagram.com/CMC_Lancaster/" target="_blank" rel="nofollow external" class="icon"><i class="instaf fa fab fa-twitter" style="color: #04244a;"></i></a>
    <a href="https://www.instagram.com/CMC_Lancaster/" target="_blank" rel="nofollow external" class="icon"><i class="instaf fa fab fa-instagram instagram" style="color: #04244a;"></i></a>
    <a href="https://www.instagram.com/CMC_Lancaster/" target="_blank" rel="nofollow external" class="icon"><i class="instaf fa fab fa-linkedin" style="color: #04244a;"></i></a>
    <a href="https://www.instagram.com/CMC_Lancaster/" target="_blank" rel="nofollow external" class="icon"><i class="instaf fa fab fa-youtube-play youtube" style="color: #04244a;"></i></a>
    <a href="https://www.instagram.com/CMC_Lancaster/" target="_blank" rel="nofollow external" class="icon"><i class="instaf fa fab fa-facebook" style="color: #04244a;"></i></a>
  
  



   

  </div>
   </div>









</div>

</div>
 -->










        <!--  language translator js start-->


        <?php include "footer.php" ?>
     <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({includedLanguages: 'en,es', multilanguagePage: true, layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
}

$('document').ready(function () {
    var iFrameID = document.getElementById('idIframe');
      if(iFrameID) {
           var cont =  iFrameID.contentWindow.document.body || frame.contentDocument.body
            // here you can make the height            
            iFrameID.height = cont.scrollHeight + "px";
      }   

    // RESTYLE THE DROPDOWN MENU
    $('#google_translate_element').on("click", function () {

        // Change font family and color
        $("iframe").contents().find(".goog-te-menu2-item div, .goog-te-menu2-item:link div, .goog-te-menu2-item:visited div, .goog-te-menu2-item:active div, .goog-te-menu2 *")
            .css({
                'color': '#544F4B',
                'font-family': 'Roboto',
                'width':'100%',
                'font-size':'unset'
                // 'border-bottom': '1px solid rgba(128, 128, 128, 0.2)'
            });
        $("iframe").contents().find(".goog-te-menu2-item div")
            .css({
                'border-bottom': '1px solid rgba(128, 128, 128, 0.2)'
            });
        // Change menu's padding
        $("iframe").contents().find('.goog-te-menu2-item-selected').css ('display', 'none');
      
        // Change menu's padding
        $("iframe").contents().find('.goog-te-menu2').css ('padding', '0px');
      
        // Change the padding of the languages
        $("iframe").contents().find('.goog-te-menu2-item div').css('padding', '2px');
        $("iframe").contents().find('.goog-te-menu2-item div').css('font-size', '9pt');
        $("iframe").contents().find('.goog-te-menu2-item div').css('border', ' 1px solid rgba(128, 128, 128, 0.2)');
        // $("iframe").contents().find('.goog-te-menu2-item div:last-child').css('border-top', '0px');
               
         $("iframe").contents().find('.goog-te-menu2-item div').css('width','unset');
        // Change the width of the languages
        $("iframe").contents().find('.goog-te-menu2-item').css('width', '100%');
        $("iframe").contents().find('td').css('width', '100%');
      
        // Change hover effects
        $("iframe").contents().find(".goog-te-menu2-item div").hover(function () {
            $(this).css('background-color', '#43b2ec').find('span.text').css('color', 'white');
        }, function () {
            $(this).css('background-color', 'white').find('span.text').css('color', '#544F4B');
        });

        // Change Google's default blue border
        $("iframe").contents().find('.goog-te-menu2').css('border', 'none');

        // Change the iframe's box shadow
        // $(".goog-te-menu-frame").css('box-shadow', '0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.3)');
        
      
      
        // Change the iframe's size and position?
        $(".goog-te-menu-frame").css({
            'height': '100%',
            'width': '100%',
            'top': '0px',
            'box-shadow':'none',
            '-webkit-box-shadow':'none',
            'left': '1190px'
            // 'border':' 1px solid rgba(128, 128, 128, 0.2)'
        });
        // Change iframes's size
        $("iframe").contents().find('.goog-te-menu2').css({
            // 'height': '100%',
            'width': '100%'
        });
    });
     $('.goog-te-menu2-item').on("click", function () {
        $("iframe").contents().find('.goog-te-menu-frame').css ('height', '100px !important');
     });

            jQuery.ajax({
        type: "GET",
         url: "API/calendar.php",
       // url: "/development/space/CMCL-space-backup-13Sep/API/calendar.php",
        
        success: function(data) {
          var events = JSON.parse(data);
          var calendarEl = document.getElementById('calendar');
          var date = new Date();

                var calendar = new FullCalendar.Calendar(calendarEl, {
                  plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
                  height: 'parent',
                  header: {
                    left: 'prev,next today', 
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'

                  
                  },
                  defaultView: 'dayGridMonth',
                  defaultDate: date,
                  navLinks: true, // can click day/week names to navigate views
                  editable: true,
                  eventLimit: true, // allow "more" link when too many events
                  events: events
                });

                calendar.render();
        }, error: function() {
          alert("error");
        }
      });
      
});
// $('.when-element-with-this-class').ready(function() {
//     alert( "ready!" );
// });
</script>

      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- language translator js end -->


<link rel="stylesheet" type="text/css" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/lang.css">

     
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/cart-fragments.min.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/foundation.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/foundation.equalizer.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/foundation.accordion.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/owl.carousel.min.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/video.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/bigvideo.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/main.js"></script>
      <!-- <script src="assets/js/main.js"></script> -->

      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/hero-carousel.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/mobile-menu.js"></script>
       <script type="text/javascript" src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/menu.js"></script>
       <link href='https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/main-core.css' rel='stylesheet' />
        <link href='https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/main-daygrid.css' rel='stylesheet' />
        <link href='https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/main-timegrid.css' rel='stylesheet' />
        <link href='https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/main-list.css' rel='stylesheet' />
        <script src='https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/main-core.js'></script>
        <script src='https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/main-interaction.js'></script>
        <script src='https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/main-daygrid.js'></script>
        <script src='https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/main-timegrid.js'></script>
        <script src='https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/main-list.js'></script>
       
      <script type="text/javascript">
         /* <![CDATA[ */
         var aepc_pixel_events = {"custom_events":{"AdvancedEvents":[{"params":{"login_status":"not_logged_in","post_type":"page","object_id":"21","object_type":"home"},"delay":0}]}};
         /* ]]> */
      </script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/pixel-events.min.js"></script>
      <style type="text/css">
        .insta-image{
          width:50%;
        }
        .insta-image:nth-of-type(3){
            width: 10px;
          }

        #instafeed{
          max-width: 100%;
        }
        @media only screen and (min-width: 40.0625em){
          .insta-image {
              /*width: 33.333333%;*/
              width: 25%;
          }
          
        }
        /*@media only screen and (min-width: 64.0625em){
          .insta-image {
              width: 25%;
          }
        }*/
        @media only screen and (max-width: 533px){
          .bg-image{
            background-position: 0 100px !important;
          }
        }
        @media only screen and (max-width: 414px){
          .bg-image{
              background-position: -60px 100px !important;
              }
        }
        @media only screen and (max-width: 320px){
          .bg-image{
            background-position: 50% 80px !important;
          }
        }
      </style>
      <script type="text/javascript">
          jQuery(document).ready(function() {
      //       alert('hello');
      //       jQuery.ajax({
      //   type: "GET",
      //   url: "/crescent/API/calendar.php",
        
      //   success: function(data) {
      //     alert("sucess");
      //     var events = JSON.parse(data);
      //     var calendarEl = document.getElementById('calendar');
      //     var date = new Date();

      //           var calendar = new FullCalendar.Calendar(calendarEl, {
      //             plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
      //             height: 'parent',
      //             header: {
      //               left: 'prev,next today', 
      //               center: 'title',
      //               right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'

                  
      //             },
      //             defaultView: 'dayGridMonth',
      //             defaultDate: date,
      //             navLinks: true, // can click day/week names to navigate views
      //             editable: true,
      //             eventLimit: true, // allow "more" link when too many events
      //             events: events
      //           });

      //           calendar.render();
      //   }, error: function() {
      //     alert("error");
      //   }
      // });});
              // document.addEventListener('DOMContentLoaded', function() {
              //   var calendarEl = document.getElementById('calendar');

              //   var calendar = new FullCalendar.Calendar(calendarEl, {
              //     plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
              //     height: 'parent',
              //     header: {
              //       left: 'prev,next today',
              //       center: 'title',
              //       right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'

                  
              //     },
              //     defaultView: 'dayGridMonth',
              //     defaultDate: '2019-08-12',
              //     navLinks: true, // can click day/week names to navigate views
              //     editable: true,
              //     eventLimit: true, // allow "more" link when too many events
              //     events: [
              //       {
              //         title: 'All Day Event',
              //         start: '2019-08-01',
              //       },
              //       {
              //         title: 'Long Event',
              //         start: '2019-08-07',
              //         end: '2019-08-10'
              //       },
              //       {
              //         groupId: 999,
              //         title: 'Repeating Event',
              //         start: '2019-08-09T16:00:00'
              //       },
              //       {
              //         groupId: 999,
              //         title: 'Repeating Event',
              //         start: '2019-08-16T16:00:00'
              //       },
              //       {
              //         title: 'Conference',
              //         start: '2019-08-11',
              //         end: '2019-08-13'
              //       },
              //       {
              //         title: 'Meeting',
              //         start: '2019-08-12T10:30:00',
              //         end: '2019-08-12T12:30:00'
              //       },
              //       {
              //         title: 'Lunch',
              //         start: '2019-08-12T12:00:00'
              //       },
              //       {
              //         title: 'Meeting',
              //         start: '2019-08-12T14:30:00'
              //       },
              //       {
              //         title: 'Happy Hour',
              //         start: '2019-08-12T17:30:00'
              //       },
              //       {
              //         title: 'Dinner',
              //         start: '2019-08-12T20:00:00'
              //       },
              //       {
              //         title: 'Birthday Party',
              //         start: '2019-08-13T07:00:00'
              //       },
              //       {
              //         title: 'Click for Google',
              //         url: 'http://google.com/',
              //         start: '2019-08-28'
              //       }
              //     ]
              //   });

              //   calendar.render();
              // });
          
        </script>
   </body>
</html>