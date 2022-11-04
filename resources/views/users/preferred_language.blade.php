@include('header')

<div class="container">
      <div class="row mt-4">
        <div class="col-md-4"></div>
        <div class="col-md-4">
         <h1>Chat Translation</h1>
          <form action="/preferredlanguagepost" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
              <h4>Translate To</h4>

  <select class="form-control" name="language" data-placeholder="Choose a Language...">
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'AF' ? 'selected' : ''); ?> value="AF">Afrikaans</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'SQ' ? 'selected' : ''); ?> value="SQ">Albanian</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'AR' ? 'selected' : ''); ?> value="AR">Arabic</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'HY' ? 'selected' : ''); ?> value="HY">Armenian</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'EU' ? 'selected' : ''); ?> value="EU">Basque</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'BN' ? 'selected' : ''); ?> value="BN">Bengali</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'BG' ? 'selected' : ''); ?> value="BG">Bulgarian</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'CA' ? 'selected' : ''); ?> value="CA">Catalan</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'KM' ? 'selected' : ''); ?> value="KM">Cambodian</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'ZH' ? 'selected' : ''); ?> value="ZH">Chinese (Mandarin)</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'HR' ? 'selected' : ''); ?> value="HR">Croatian</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'CS' ? 'selected' : ''); ?> value="CS">Czech</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'DA' ? 'selected' : ''); ?> value="DA">Danish</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'NL' ? 'selected' : ''); ?> value="NL">Dutch</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'en' ? 'selected' : ''); ?> value="en">English</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'ET' ? 'selected' : ''); ?> value="ET">Estonian</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'FJ' ? 'selected' : ''); ?> value="FJ">Fiji</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'FI' ? 'selected' : ''); ?> value="FI">Finnish</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'FR' ? 'selected' : ''); ?> value="FR">French</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'KA' ? 'selected' : ''); ?> value="KA">Georgian</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'DE' ? 'selected' : ''); ?> value="DE">German</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'EL' ? 'selected' : ''); ?> value="EL">Greek</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'GU' ? 'selected' : ''); ?> value="GU">Gujarati</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'HE' ? 'selected' : ''); ?> value="HE">Hebrew</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'HI' ? 'selected' : ''); ?> value="HI">Hindi</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'HU' ? 'selected' : ''); ?> value="HU">Hungarian</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'IS' ? 'selected' : ''); ?> value="IS">Icelandic</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'ID' ? 'selected' : ''); ?> value="ID">Indonesian</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'GA' ? 'selected' : ''); ?> value="GA">Irish</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'IT' ? 'selected' : ''); ?> value="IT">Italian</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'JA' ? 'selected' : ''); ?> value="JA">Japanese</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'JW' ? 'selected' : ''); ?> value="JW">Javanese</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'KO' ? 'selected' : ''); ?> value="KO">Korean</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'LA' ? 'selected' : ''); ?> value="LA">Latin</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'LV' ? 'selected' : ''); ?> value="LV">Latvian</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'LT' ? 'selected' : ''); ?> value="LT">Lithuanian</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'MK' ? 'selected' : ''); ?> value="MK">Macedonian</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'MS' ? 'selected' : ''); ?> value="MS">Malay</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'ML' ? 'selected' : ''); ?> value="ML">Malayalam</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'MT' ? 'selected' : ''); ?> value="MT">Maltese</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'MI' ? 'selected' : ''); ?> value="MI">Maori</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'MR' ? 'selected' : ''); ?> value="MR">Marathi</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'MN' ? 'selected' : ''); ?> value="MN">Mongolian</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'NE' ? 'selected' : ''); ?> value="NE">Nepali</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'NO' ? 'selected' : ''); ?> value="NO">Norwegian</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'FA' ? 'selected' : ''); ?> value="FA">Persian</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'PL' ? 'selected' : ''); ?> value="PL">Polish</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'PT' ? 'selected' : ''); ?> value="PT">Portuguese</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'PA' ? 'selected' : ''); ?> value="PA">Punjabi</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'QU' ? 'selected' : ''); ?> value="QU">Quechua</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'RO' ? 'selected' : ''); ?> value="RO">Romanian</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'RU' ? 'selected' : ''); ?> value="RU">Russian</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'SM' ? 'selected' : ''); ?> value="SM">Samoan</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'SR' ? 'selected' : ''); ?> value="SR">Serbian</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'SK' ? 'selected' : ''); ?> value="SK">Slovak</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'SL' ? 'selected' : ''); ?> value="SL">Slovenian</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'ES' ? 'selected' : ''); ?> value="ES">Spanish</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'SW' ? 'selected' : ''); ?> value="SW">Swahili</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'SV' ? 'selected' : ''); ?> value="SV">Swedish </option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'TA' ? 'selected' : ''); ?> value="TA">Tamil</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'TT' ? 'selected' : ''); ?> value="TT">Tatar</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'TE' ? 'selected' : ''); ?> value="TE">Telugu</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'TH' ? 'selected' : ''); ?> value="TH">Thai</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'BO' ? 'selected' : ''); ?> value="BO">Tibetan</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'TO' ? 'selected' : ''); ?> value="TO">Tonga</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'TR' ? 'selected' : ''); ?> value="TR">Turkish</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'UK' ? 'selected' : ''); ?> value="UK">Ukrainian</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'UR' ? 'selected' : ''); ?> value="UR">Urdu</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'UZ' ? 'selected' : ''); ?> value="UZ">Uzbek</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'VI' ? 'selected' : ''); ?> value="VI">Vietnamese</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'CY' ? 'selected' : ''); ?> value="CY">Welsh</option>
  <option <?php echo (isset($data[0]->users_lang) && $data[0]->users_lang == 'XH' ? 'selected' : ''); ?> value="XH">Xhosa</option>
</select>
           
            </div>

            
            <button type="submit" class="btn btn-primary btn-block">Save</button>
          </form>
        </div>
        <div class="col-md-4"></div>
      </div>

      
  </div>

  @include('footer')


