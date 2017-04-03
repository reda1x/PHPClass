<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"
      rel="stylesheet">
<style>
    h2 {
        color: red;
    }
    h3 {
        color: green;
    }
</style>
<?php
$states = array(
    'AL' => 'ALABAMA',
    'AK' => 'ALASKA',
    'AS' => 'AMERICAN SAMOA',
    'AZ' => 'ARIZONA',
    'AR' => 'ARKANSAS',
    'CA' => 'CALIFORNIA',
    'CO' => 'COLORADO',
    'CT' => 'CONNECTICUT',
    'DE' => 'DELAWARE',
    'DC' => 'DISTRICT OF COLUMBIA',
    'FM' => 'FEDERATED STATES OF MICRONESIA',
    'FL' => 'FLORIDA',
    'GA' => 'GEORGIA',
    'GU' => 'GUAM GU',
    'HI' => 'HAWAII',
    'ID' => 'IDAHO',
    'IL' => 'ILLINOIS',
    'IN' => 'INDIANA',
    'IA' => 'IOWA',
    'KS' => 'KANSAS',
    'KY' => 'KENTUCKY',
    'LA' => 'LOUISIANA',
    'ME' => 'MAINE',
    'MH' => 'MARSHALL ISLANDS',
    'MD' => 'MARYLAND',
    'MA' => 'MASSACHUSETTS',
    'MI' => 'MICHIGAN',
    'MN' => 'MINNESOTA',
    'MS' => 'MISSISSIPPI',
    'MO' => 'MISSOURI',
    'MT' => 'MONTANA',
    'NE' => 'NEBRASKA',
    'NV' => 'NEVADA',
    'NH' => 'NEW HAMPSHIRE',
    'NJ' => 'NEW JERSEY',
    'NM' => 'NEW MEXICO',
    'NY' => 'NEW YORK',
    'NC' => 'NORTH CAROLINA',
    'ND' => 'NORTH DAKOTA',
    'MP' => 'NORTHERN MARIANA ISLANDS',
    'OH' => 'OHIO',
    'OK' => 'OKLAHOMA',
    'OR' => 'OREGON',
    'PW' => 'PALAU',
    'PA' => 'PENNSYLVANIA',
    'PR' => 'PUERTO RICO',
    'RI' => 'RHODE ISLAND',
    'SC' => 'SOUTH CAROLINA',
    'SD' => 'SOUTH DAKOTA',
    'TN' => 'TENNESSEE',
    'TX' => 'TEXAS',
    'UT' => 'UTAH',
    'VT' => 'VERMONT',
    'VI' => 'VIRGIN ISLANDS',
    'VA' => 'VIRGINIA',
    'WA' => 'WASHINGTON',
    'WV' => 'WEST VIRGINIA',
    'WI' => 'WISCONSIN',
    'WY' => 'WYOMING',
    'AE' => 'ARMED FORCES AFRICA \ CANADA \ EUROPE \ MIDDLE EAST',
    'AA' => 'ARMED FORCES AMERICA (EXCEPT CANADA)',
    'AP' => 'ARMED FORCES PACIFIC'
);

$selectedState = filter_input(INPUT_POST, 'states');
?>
<form actionn ="" method ="post">
    fullname: <input type ='text' name='fullname' value='' />
    <br>
    email: <input type ='text' name='email' value='' />
    <br>
    addressline1: <input type ='text' name='addressline1' value='' />
    <br>
    city: <input type ='text' name='city' value='' />
    <br>
    State:
    <select name="state" >
        <?php foreach ($states as $key => $value): ?> 
            <option value="<?php echo $key; ?>" <?php if ($selectedState == $key): ?> selected="selected" <?php endif; ?>><?php echo $value; ?></option>
        <?php endforeach; ?>
    </select>        <br>
    zip: <input type ='text' name='zip' value='' />
    <br>
    birthday: <input type ='date' name='birthday' value='' />
    <br>
    <input type ='submit' value='submit' class="btn btn-primary" >

</form>
<?php
?>

<!-- put your HTML here -->