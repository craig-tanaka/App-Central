<?php
get_header();
?>

<main id="site-content" role="main">

    <form class="contact100-form validate-form">
        <span class="contact100-form-title">
            Sign In
        </span>

        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
            <span class="label-input100">Email</span>
            <input class="input100" type="text" name="email" placeholder="Enter your email addess">
            <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Message is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="password" placeholder="Enter Your Password">
            <span class="focus-input100"></span>
        </div>

        <div class="container-contact100-form-btn">
            <button class="contact100-form-btn">
                <span>
                    Register
                    <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                </span>
            </button>
        </div>
    </form>
    <style>
        /*//////////////////////////////////////////////////////////////////
        [ RESTYLE TAG ]*/

        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        /*---------------------------------------------*/
        a {
            /* font-family: Poppins-Regular; */
            font-size: 14px;
            line-height: 1.7;
            color: #666666;
            margin: 0px;
            transition: all 0.4s;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
        }

        a:focus {
            outline: none !important;
        }

        a:hover {
            text-decoration: none;
        }

        /*---------------------------------------------*/
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0px;
        }

        p {
            /* font-family: Poppins-Regular; */
            font-size: 14px;
            line-height: 1.7;
            color: #666666;
            margin: 0px;
        }

        ul,
        li {
            margin: 0px;
            list-style-type: none;
        }


        /*---------------------------------------------*/
        input {
            outline: none;
            border: none;
        }

        textarea {
            outline: none;
            border: none;
        }

        textarea:focus,
        input:focus {
            border-color: transparent !important;
        }

        input:focus::-webkit-input-placeholder {
            color: transparent;
        }

        input:focus:-moz-placeholder {
            color: transparent;
        }

        input:focus::-moz-placeholder {
            color: transparent;
        }

        input:focus:-ms-input-placeholder {
            color: transparent;
        }

        textarea:focus::-webkit-input-placeholder {
            color: transparent;
        }

        textarea:focus:-moz-placeholder {
            color: transparent;
        }

        textarea:focus::-moz-placeholder {
            color: transparent;
        }

        textarea:focus:-ms-input-placeholder {
            color: transparent;
        }

        input::-webkit-input-placeholder {
            /* font-family: Poppins-Medium; */
            color: #555555;
        }

        input:-moz-placeholder {
            /* font-family: Poppins-Medium; */
            color: #555555;
        }

        input::-moz-placeholder {
            /* font-family: Poppins-Medium; */
            color: #555555;
        }

        input:-ms-input-placeholder {
            /* font-family: Poppins-Medium; */
            color: #555555;
        }

        textarea::-webkit-input-placeholder {
            /* font-family: Poppins-Medium; */
            color: #555555;
        }

        textarea:-moz-placeholder {
            /* font-family: Poppins-Medium; */
            color: #555555;
        }

        textarea::-moz-placeholder {
            /* font-family: Poppins-Medium; */
            color: #555555;
        }

        textarea:-ms-input-placeholder {
            /* font-family: Poppins-Medium; */
            color: #555555;
        }

        /*---------------------------------------------*/
        button {
            outline: none !important;
            border: none;
            background: transparent;
        }

        button:hover {
            cursor: pointer;
        }

        iframe {
            border: none !important;
        }


        /*---------------------------------------------*/
        .container {
            max-width: 1200px;
        }




        /*//////////////////////////////////////////////////////////////////
        [ Contact ]*/

        .container-contact100 {
            width: 100%;
            min-height: 100vh;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 15px;
            background: transparent;
            position: relative;
            z-index: 1;
        }

        .contact100-map {
            position: absolute;
            z-index: -2;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }

        .wrap-contact100 {
            width: 1170px;
            background: #fff;
            border-radius: 10px;
            padding: 82px 180px 33px 180px;
            position: relative;
            display: none;
        }

        .show-wrap-contact100 {
            visibility: visible;
            opacity: 1;
        }


        /*==================================================================
        [ Form ]*/

        .contact100-form {
            width: 500px;
            margin-left: auto;
            margin-right: auto;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .contact100-form-title {
            display: block;
            width: 100%;
            /* font-family: Poppins-Bold; */
            font-weight: bold;
            font-size: 39px;
            color: #333333;
            line-height: 1.2;
            text-align: center;
            padding-bottom: 20px;
        }



        /*------------------------------------------------------------------
        [ Input ]*/

        .wrap-input100 {
            width: 100%;
            position: relative;
            border-bottom: 2px solid #d9d9d9;
            padding-bottom: 13px;
            margin-bottom: 30px;
        }

        .rs1-wrap-input100 {
            width: calc((100% - 30px) / 2);
        }

        .label-input100 {
            /* font-family: Poppins-Regular; */
            font-size: 15px;
            color: #999999;
            line-height: 1.5;
            padding-left: 1.5rem;
        }

        .input100 {
            display: block;
            width: 100%;
            background: transparent;
            /* font-family: Poppins-SemiBold; */
            font-size: 18px;
            color: #555555;
            line-height: 1.2;
            padding: 0 5px;
            border-width: 0px !important;
        }

        .focus-input100 {
            position: absolute;
            display: block;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
        }

        .focus-input100::before {
            content: "";
            display: block;
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;

            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;

            background: #ff4b5a;
        }


        /*---------------------------------------------*/
        input.input100 {
            height: 40px;
        }


        textarea.input100 {
            min-height: 110px;
            padding-top: 9px;
            padding-bottom: 13px;
        }


        .input100:focus+.focus-input100::before {
            width: 100%;
        }

        .has-val.input100+.focus-input100::before {
            width: 100%;
        }


        /*------------------------------------------------------------------
[ Button ]*/
        .container-contact100-form-btn {
            width: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }

        .contact100-form-btn {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 20px;
            min-width: 160px;
            margin-top: 10px;
            margin-left: auto;
            margin-right: auto;
            height: 50px;
            background-color: #ff4b5a;
            border-radius: 25px;

            /* font-family: Poppins-Medium; */
            font-size: 16px;
            color: #fff;
            line-height: 1.2;

            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;

            box-shadow: 0 10px 30px 0px rgba(255, 75, 90, 0.5);
            -moz-box-shadow: 0 10px 30px 0px rgba(255, 75, 90, 0.5);
            -webkit-box-shadow: 0 10px 30px 0px rgba(255, 75, 90, 0.5);
            -o-box-shadow: 0 10px 30px 0px rgba(255, 75, 90, 0.5);
            -ms-box-shadow: 0 10px 30px 0px rgba(255, 75, 90, 0.5);
        }

        .contact100-form-btn i {
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
        }

        .contact100-form-btn:hover {
            background-color: #333333;
            box-shadow: 0 10px 30px 0px rgba(51, 51, 51, 0.5);
            -moz-box-shadow: 0 10px 30px 0px rgba(51, 51, 51, 0.5);
            -webkit-box-shadow: 0 10px 30px 0px rgba(51, 51, 51, 0.5);
            -o-box-shadow: 0 10px 30px 0px rgba(51, 51, 51, 0.5);
            -ms-box-shadow: 0 10px 30px 0px rgba(51, 51, 51, 0.5);
        }

        .contact100-form-btn:hover i {
            -webkit-transform: translateX(10px);
            -moz-transform: translateX(10px);
            -ms-transform: translateX(10px);
            -o-transform: translateX(10px);
            transform: translateX(10px);
        }


        /*------------------------------------------------------------------
[ Responsive ]*/

        @media (max-width: 992px) {
            .wrap-contact100 {
                padding: 82px 80px 33px 80px;
            }
        }

        @media (max-width: 768px) {
            .rs1-wrap-input100 {
                width: 100%;
            }
        }

        @media (max-width: 576px) {
            .wrap-contact100 {
                padding: 82px 15px 33px 15px;
            }
        }


        /*------------------------------------------------------------------
[ Alert validate ]*/

        .validate-input {
            position: relative;
        }

        .alert-validate::before {
            content: attr(data-validate);
            position: absolute;
            max-width: 70%;
            background-color: #fff;
            border: 1px solid #c80000;
            border-radius: 2px;
            padding: 4px 25px 4px 10px;
            top: 58%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            right: 2px;
            pointer-events: none;

            /* font-family: Poppins-Medium; */
            color: #c80000;
            font-size: 13px;
            line-height: 1.4;
            text-align: left;

            visibility: hidden;
            opacity: 0;

            -webkit-transition: opacity 0.4s;
            -o-transition: opacity 0.4s;
            -moz-transition: opacity 0.4s;
            transition: opacity 0.4s;
        }

        .alert-validate::after {
            content: "\f06a";
            font-family: FontAwesome;
            display: block;
            position: absolute;
            color: #c80000;
            font-size: 16px;
            top: 58%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            right: 8px;
        }

        .alert-validate:hover:before {
            visibility: visible;
            opacity: 1;
        }

        @media (max-width: 992px) {
            .alert-validate::before {
                visibility: visible;
                opacity: 1;
            }
        }
    </style>
</main><!-- #site-content -->

<?php
get_footer();

// Todo: check for register pages on init
// Todo: delete custom pages on deaction
