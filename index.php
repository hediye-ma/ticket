<?php

include_once "header.php";
include_once "connect2.php";

 if (isset($_POST['send'])){

$watchlist=$_POST['watchlist'];
$tp=$_POST['tp'];
$sr=$_POST['sr'];
$rp=$_POST['rp'];
$break=$_POST['break'];
$cp=$_POST['cp'];
$pz=$_POST['pz'];
$np=$_POST['np'];
$broken=$_POST['broken'];
$checkf=$_POST['checkf'];
$description=$_POST['description'];



$pdo=connect_db();
$query=$pdo->prepare("INSERT INTO doc_tbl (watchlist,tp,sr,rp,break,cp,pz,np,broken,checkf,description) values ('$watchlist','$tp','$sr','$rp','$break','$cp','$pz','$np','$broken','$checkf','$description')");
$query->execute();}
 ?>

<div class="container colorbox">
    <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-10">


    <!-- action = ادرس صفحه ای رو میگیره ک میخوای اطلاعات رو بهش ارسال کنی
         method =   اطلاعات رو ارسال میکنه و مقادیر رو هم در نوار بالا نمایش نمیده و محرمانه تره(post)  اطلاعات رو ارسال میکنه ولی در نوار منوی بالا هم نمایش میده (get) دو تا پارامتر داره
-->
    <form method="post" style="font-size: 20px">

        <h4 class="title_box">trading ticket</h4>
        <br>
        :trade item<br>
        <select name="watchlist" class="col-md-12">
            <option value="DXY">DXY</option>
            <option value="EURUSD">EURUSD</option>
            <option value="CADCHF">CADCHF</option>
            <option value="GBPJPY">GBPJPY</option>
            <option value="XAUUSD">XAUUSD</option>
            <option value="USDJPY">USDJPY</option>
            <option value="USDCAD">USDCAD</option>
            <option value="US30">US30</option>
            <option value="SPX500USD">SPX500USD</option>
            <option value="DE30">DE30</option>
            <option value="ADBE">ADBE</option>
            <option value="AAPL">AAPL</option>
            <option value="ATVI">ATVI</option>
            <option value="BA">BA</option>
            <option value="BAC">BAC</option>
            <option value="BRKB">BRKB</option>
            <option value="C">C</option>
            <option value="CAT">CAT</option>
            <option value="CSCO">CSCO</option>
            <option value="EBAY">EBAY</option>
            <option value="FB">FB</option>
            <option value="GE">GE</option>
            <option value="EA">EA</option>
            <option value="GM">GM</option>
            <option value="GS">GS</option>
            <option value="IBM">IBM</option>
            <option value="INTC">INTC</option>
            <option value="JNJ">JNJ</option>
            <option value="JPM">JPM</option>
            <option value="KO">KO</option>
            <option value="LLY">LLY</option>
            <option value="MCD">MCD</option>
            <option value="MMM">MMM</option>
            <option value="MSFT">MSFT</option>
            <option value="NEM">NEM</option>
            <option value="NFLX">NFLX</option>
            <option value="NKE">NKE</option>
            <option value="NVDA">NVDA</option>
            <option value="ORCL">ORCL</option>
            <option value="PEP">PEP</option>
            <option value="PFE">PFE</option>
            <option value="PG">PG</option>
            <option value="v">PM</option>
            <option value="PRU">PRU</option>
            <option value="SBUX">SBUX</option>
            <option value="PLJPY">PYPL</option>
            <option value="UPS">UPS</option>
            <option value="V">V</option>
            <option value="WFC">WFC</option>
            <option value="WMT">WMT</option>
            <option value="XOM">XOM</option>
            <option value="BTCUSD">BTCUSD</option>

        </select><br><hr>
        Position type<br>
        <div class="form-check">
            <input  class="form-check-inline" type="radio" value="buy" name="tp" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                buy
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-inline" type="radio" value="sell" name="tp" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
                sell
            </label>

            <select style="float: right;" name="" class="col-md-1.5">
                <option value="10">10%</option>
                <option value="20">20%</option>
                <option value="30">30%</option>
                <option value="40">40%</option>
                <option value="50">50%</option>
                <option value="60">60%</option>
                <option value="70">70%</option>
                <option value="80">80%</option>
                <option value="90">90%</option>
                <option value="100">100%</option>
            </select>
        </div>
        <hr>
        is Price crossing support or Res area<br>
        <div class="form-check" >
            <input  class="form-check-inline" type="radio" value="yes" name="sr" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                yes
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-inline" type="radio" value="no" name="sr" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
                no
            </label>

            <select style="float: right" name="" class="col-md-1.5">
                <option value="10">10%</option>
                <option value="20">20%</option>
                <option value="30">30%</option>
                <option value="40">40%</option>
                <option value="50">50%</option>
                <option value="60">60%</option>
                <option value="70">70%</option>
                <option value="80">80%</option>
                <option value="90">90%</option>
                <option value="100">100%</option>

            </select></div>
        <hr>
        Ret to pivote
        <div class="form-check" >
            <input  class="form-check-inline" type="radio" value="yes" name="rp" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                yes
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-inline" type="radio" value="no" name="rp" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
                no
            </label>
            <select style="float: right" name="" class="col-md-1.5">
                <option value="10">10%</option>
                <option value="20">20%</option>
                <option value="30">30%</option>
                <option value="40">40%</option>
                <option value="50">50%</option>
                <option value="60">60%</option>
                <option value="70">70%</option>
                <option value="80">80%</option>
                <option value="90">90%</option>
                <option value="100">100%</option>

            </select>
        </div><hr>
        does the trigger line break
        <div class="form-check">
            <input  class="form-check-inline" type="radio" value="yes" name="break" id="flexRadioDefault1" >
            <label class="form-check-label" for="flexRadioDefault1">
                yes
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-inline" type="radio" value="no" name="break" id="flexRadioDefault2" >
            <label class="form-check-label" for="flexRadioDefault2">
                no
            </label>
            <select style="float: right" name="" class="col-md-1.5">
                <option value="10">10%</option>
                <option value="20">20%</option>
                <option value="30">30%</option>
                <option value="40">40%</option>
                <option value="50">50%</option>
                <option value="60">60%</option>
                <option value="70">70%</option>
                <option value="80">80%</option>
                <option value="90">90%</option>
                <option value="100">100%</option>

            </select>
        </div><hr>
        candle stick pattern <br>
        <select class="col-md-3" name="cp">
            <option value="reversal">reversal</option>
            <option value="continuing">continuing</option>
            <option value="strong reversal">strong reversal</option>
            <option value="strong continuing">strong continuing</option>
        </select>
        <select style="float: right" name="" class="col-md-1.5">
            <option value="10">10%</option>
            <option value="20">20%</option>
            <option value="30">30%</option>
            <option value="40">40%</option>
            <option value="50">50%</option>
            <option value="60">60%</option>
            <option value="70">70%</option>
            <option value="80">80%</option>
            <option value="90">90%</option>
            <option value="100">100%</option>

        </select>
        <hr>
       is price pattern in pivot zone <br>
        <div class="form-check">
            <input  class="form-check-inline" type="radio" value="yes" name="pz" id="flexRadioDefault1" >
            <label class="form-check-label" for="flexRadioDefault1">
                yes
            </label>

            <select style="margin-left: 30px" name="np">

                <option value="double top">double top</option>
                <option value="double button">double button</option>
                <option value="triple top">triple top</option>
                <option value="triple button">triple button</option>
                <option value="head $ shoulde">head $ shoulder</option>
                <option value="triangle">triangle</option>
                <option value="flag">flag</option>
                <option value="bat">bat</option>
                <option value="Gartley">Gartley</option>
                <option value="AB=CD">AB=CD</option>
                <option value="3drive">3drive</option>
            </select></div>
        <div class="form-check">
            <input  class="form-check-inline" type="radio" value="no" name="pz" id="flexRadioDefault1" >
            <label class="form-check-label" for="flexRadioDefault1">
              no
            </label>
            <select style="float: right" name="" class="col-md-1.5">
                <option value="10">10%</option>
                <option value="20">20%</option>
                <option value="30">30%</option>
                <option value="40">40%</option>
                <option value="50">50%</option>
                <option value="60">60%</option>
                <option value="70">70%</option>
                <option value="80">80%</option>
                <option value="90">90%</option>
                <option value="100">100%</option>

            </select>
            <hr>
            dose the broken trigger line h1 candle close <br>
            <div class="form-check" >
                <input  class="form-check-inline" type="radio" value="yes" name="broken" id="flexRadioDefault1" >
                <label class="form-check-label" for="flexRadioDefault1">
                    yes
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-inline" type="radio" value="no" name="broken" id="flexRadioDefault2" >
                <label class="form-check-label" for="flexRadioDefault2">
                    no
                </label>
                <select style="float: right" name="" class="col-md-1.5">
                    <option value="10">10%</option>
                    <option value="20">20%</option>
                    <option value="30">30%</option>
                    <option value="40">40%</option>
                    <option value="50">50%</option>
                    <option value="60">60%</option>
                    <option value="70">70%</option>
                    <option value="80">80%</option>
                    <option value="90">90%</option>
                    <option value="100">100%</option>

                </select>
            </div><hr>
            check fundamental text notes <br>
            <div class="form-check">
                <input  class="form-check-inline" type="radio" value="yes" name="checkf" id="flexRadioDefault1" >
                <label class="form-check-label" for="flexRadioDefault1">
                    yes
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-inline" type="radio" value="no" name="checkf" id="flexRadioDefault2" >
                <label class="form-check-label" for="flexRadioDefault2">
                    no
                </label>
                <select style="float: right" name="" class="col-md-1.5">
                    <option value="10">10%</option>
                    <option value="20">20%</option>
                    <option value="30">30%</option>
                    <option value="40">40%</option>
                    <option value="50">50%</option>
                    <option value="60">60%</option>
                    <option value="70">70%</option>
                    <option value="80">80%</option>
                    <option value="90">90%</option>
                    <option value="100">100%</option>

                </select>
            </div><hr>
            <h6>  calender news</h6>

            <table class="table" style="text-align: left ;background: #95999c;" >
                <thead>
                <tr>
                    <th scope="col">data</th>
                    <th scope="col">time</th>
                    <th scope="col">Currency</th>
                    <th scope="col">title</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row"> Mon /Aug 23</th>
                    <td>12:30am </td>
                    <td>EUR</td>
                    <td>German Flash Manufacturing PMI</td>
                </tr>
                <tr>
                    <th scope="row"> Mon /Aug 23</th>
                    <td></td>
                    <td> EUR</td>
                    <td>  German Flash Services PMI</td>


                </tr>
                <tr>
                    <th scope="row">Thu /Aug 26</th>
                    <td>5:30am</td>
                    <td>USD</td>
                    <td>@Prelim GDP q/q</td>
                </tr>
                </tbody>
            </table>
        <input type="submit" name="send" value="send" class="btn btn-primary">

    </form>
        </div>
    </div>
</div>

</body>
</html>
