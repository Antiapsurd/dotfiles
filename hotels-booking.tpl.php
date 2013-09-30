<div class="booking">
  <h2><?php print t('Online Booking'); ?></h2>
  <form target="dispoprice" name="idForm">
    <input name="showPromotions" value="1" type="hidden">
    <input name="langue" value="" type="hidden">
    <input name="Clusternames" value="RSBHTLZira" type="hidden">
    <input name="Hotelnames" value="RSBHTLZira" type="hidden">

    <div class="booking-row">
      <div class="booking-label">Arrival</div>

      <!-- MONTH -->
      <select name="frommonth" id="month">
        <option value="1">Jan</option>
        <option value="2">Feb</option>
        <option value="3">Mar</option>
        <option value="4">Apr</option>
        <option value="5">May</option>
        <option value="6">Jun</option>
        <option value="7">Jul</option>
        <option value="8">Aug</option>
        <option value="9">Sept</option>
        <option value="10">Oct</option>
        <option value="11">Nov</option>
        <option value="12">Dec</option>
      </select>

      <!-- DAY -->
      <select name="fromday" id="day">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
      </select>

      <!-- YEAR -->
      <select name="fromyear" id="year">
        <option selected="selected" value="2013">2013</option>
        <option value="2014">2014</option>
      </select>
    </div>

    <div class="booking-row">
      <div class="booking-label">Access/IATA code</div>
      <input name="AccessCode" value="" type="password">
    </div>

    <div class="booking-button check">
      <!-- <a href="javascript:;" onclick="hhotelDispoprice(this.form);">BOOK NOW</a> -->
      <input name="B1" value="Online Booking" onclick="hhotelDispoprice(this.form)" type="button">
    </div>
  </form>
</div>
