<!-- Header Component -->
<style>
    header{
        background-color: #6018a7;
                
        position: fixed;
        top: 0;
        z-index: 100;
        width: 100%;
    }
    ul{
        /* margin-bottom: 0 !important; */
    }
    .bo_nav{
        line-height: normal; 
        font-family: "Roboto",Helvetica,Arial,sans-serif;
        /* position: sticky; */
        
        top: 0;
        left: 0;
        right: 0;
        background-color: transparent;
        box-shadow: none;
        text-align: left;
        font-size: 1rem;
        color: #fff;
        z-index: 100;
    }
    .boc_page_width{
        line-height: normal; 
        font-family: "Roboto",Helvetica,Arial,sans-serif;
        text-align: left;
        font-size: 1rem;
        color: #fff;
        width: auto !important;
        margin: 0 2rem;
        .user-logo{  
            color: #f84300;
            width: 283px;
            aspect-ratio: auto 283 / 283;
            border: none;
            vertical-align: top;
            max-width: 220%;
            height: 66px;
        }
    }
    .bo_out_logo {
        line-height: normal; 
        font-family: "Roboto",Helvetica,Arial,sans-serif;
        text-align: left;
        font-size: 1rem;
        text-decoration: underline;
        color: #f84300;
        position: relative;
        float: left;
        padding: 5px 0 0;
        width: 66px;
        height: 70px;
    }
    .bb_auth_head_wrap {
        line-height: normal; 
        font-family: "Roboto",Helvetica,Arial,sans-serif;
        text-align: left;
        font-size: 1rem;
        color: #fff;
        margin-top: 15px;
        float: right;
        display: block;
        a{ 
            box-sizing: border-box;
            display: inline-block;
            vertical-align: top;
            overflow: visible;
            background: none !important;
            border: 1px solid #d9d9d9 !important;
            line-height: 1;
            text-decoration: none; 
            font-weight: 300;
            cursor: pointer;
            background-color: #f84300 !important;
            border-color: #f84300 !important; 
            height: 44px;
            padding: 12px 20px;
            border-radius: 2em;
            color: #fff;
            margin: 0 0 0 15px; 
            svg{ 
                text-align: left;
                line-height: 1; 
                font-weight: 300;
                cursor: pointer;
                color: #fff; 
                height: 18;
                fill: none;
                width: 14px;
                margin-right: 0.64rem;
                vertical-align: bottom;
            }
        }
    }
    .bo_menu{
        line-height: normal; 
        font-family: "Roboto",Helvetica,Arial,sans-serif;
        text-align: left;
        font-size: 1rem;
        color: #fff;
        margin: 0;
        padding: 0;
        float: right;
        display: block;
        margin-top: 30px;
        .bo_menu_item{ 
            float: left;
            padding: 0;
            list-style: none;
            margin: 0 14px;
            a{  
                list-style: none;
                padding: 6px 10px;
                color: inherit;
                text-decoration: none;
            }
            a:hover{
                text-decoration: underline;
            }
        }
    }
    .bb_menu_btn{
        text-size-adjust: none;  
        float: right;
        position: relative;
        z-index: 200;
        margin: 1.375rem 0 0 0;
        padding: 20px;
        cursor: pointer;
        font-size: 1.5rem;
        line-height: 1;
        display: none;
        background: transparent;
        border: none;
        outline: none;
        color: #fff;
        transition: background-color .5s ease;
    }

    .clearfix{
        line-height: normal; 
        font-family: "Roboto",Helvetica,Arial,sans-serif;
        text-align: left;
        font-size: 1rem;
        color: #fff;
    }
    .img-logout{
        width: 20px;
        height: 20px;
    }
    .sticky-top {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1020; /* Ensure it is above other content */
    } 
</style>
<header>
    <nav class="bo_nav">
        <div class="boc_page_width">
            <a href="/" class="bo_out_logo bo_logo_ua">
                <img class="user-logo" width="283" height="283" src="/asset/img/logo.png" alt="bannerboo logo"> 
            </a>

            <div class="bb_auth_head_wrap">
                <a @if(!Session()->has('loginId'))href="/login" @else href="/logout" @endif  class="bb_lnk_brd bb_lnk_brd__red bb_lnk_brd__hg js-fbMmodalLnk">
                   
                    @if(!Session()->has('loginId'))
                        <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="js_svg replaced-svg">
                        <path d="M15.2222 17V15.2222C15.2222 14.2792 14.8476 13.3749 14.1808 12.7081C13.514 12.0413 12.6097 11.6667 11.6667 11.6667H4.55556C3.61256 11.6667 2.70819 12.0413 2.0414 12.7081C1.3746 13.3749 1 14.2792 1 15.2222V17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M8.11122 8.11111C10.0749 8.11111 11.6668 6.51923 11.6668 4.55556C11.6668 2.59188 10.0749 1 8.11122 1C6.14754 1 4.55566 2.59188 4.55566 4.55556C4.55566 6.51923 6.14754 8.11111 8.11122 8.11111Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        Sign in
                    @else
                        {{Session()->get("Username")}} 
                        <img class="img-logout" src="asset/img/logout.png"> 

                    @endif 

                </a>
            </div> 
            <ul class="bo_menu">
                
                
                <!-- <li class="bo_menu_item">
                    <a href="/" class="bo_menu_lnk ">Home</a>
                </li>  -->
                @if( Session()->has('Logion') == "loginId" && Session()->get('Role') == "Admin")
                    <!-- <li class="bo_menu_item">
                        <a href="/" class="bo_menu_lnk ">Home</a>
                    </li>  -->
                @else 
                    <li class="bo_menu_item">
                        <a href="/" class="bo_menu_lnk ">Home</a>
                    </li> 
                @endif 
                @if(Session()->get('Role') == "Admin")
                    <li class="bo_menu_item">
                        <a href="/admin/dashboard" class="bo_menu_lnk ">Dashboard</a>
                    </li>
                @endif 
                <li class="bo_menu_item">
                    <a href="#" class="bo_menu_lnk ">AboutUs</a>
                </li>  
            </ul>
            <div class="clearfix"></div>
        </div>
    </nav>
</header>
