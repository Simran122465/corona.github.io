<style type="text/css">
html{
    scroll-behavior: smooth;
}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: 'Mulish', sans-serif;
}
.row{
    margin-left:0!important;
    margin-right:0!important;

}

.nav_style{
    background-color:#a29bfe!important;
}
.nav_style a{
    color:white;
}
/* main-header */
.main-header{
    height:500px;
    width: 100%:
}
.rotate img{
    animation: rotates 3s linear infinite; 
}
@keyframes rotates{
    0% {transform:rotate(0);}
   100% {transform:rotate(360deg);}
} 
.leftside img{
    animation:beat 5s linear infinite;
}
@keyframes beat{
    0%{transform:scale(0.75);}
    20%{transform:scale(1);}
    40%{transform:scale(0.75);}
    60%{transform:scale(1);}
    80%{transform:scale(0.75);}
    100%{transform:scale(0.75);}
}
/* corona update */
.corona-update{
    margin:0 0 30px 0;
}
.corona-update h3{
    color:#ff7675;
}
.corona-update h1{
    text-align:center;
    font-weight:bold;
}
.sub_section {
    background-color:#fbfafd;
}
.footer_style{
    background-color:#a29bfe!important;
}
#topbtn{
    display:none;
    position:fixed;
    bottom:30px;
    right:40px;
    border:none;
    outline:none;
    background-color:#00A8FF;
    color:white;
    cursor:pointer;
    padding:20px;
    border-radius:10px;

}
#myBtn:hover{background:#606060;}

/*@media(max-width:768px){
    .main_header{
        height:700px;
        text-align:center;}
    }
    .main_header h1{
        text-align:center;
        padding:0;
        width:100%;
        font-size:30px;
    }
    .cont{
        display:inline!important;
    }
    .cont p{
        text-align:center;
    }
    .abtimg{
        margin-left:0!important;
    }
}*/

</style>