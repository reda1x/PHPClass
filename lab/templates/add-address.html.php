<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<style>
    h2 {
        color: red;
    }
    h3 {
        color: green;
    }
</style>
<head>
        <meta charset="UTF-8">
        <title> </title>
<a href='../index.php?'>INDEX</a>

    </head>
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

<form actionn ="" method ="post" >
    <table class ='table '>
        <tr>   <td> fullname: </td> <td><input type ='text' name='fullname' value='' /></td> </tr>

        <tr> <td>email: /td><td><input type ='text' name='email' value='' /></td>

        <tr> <td>addressline1:</td> <td><input type ='text' name='addressline1' value='' /></td></tr>
        <tr>  <td>city: </td><td><input type ='text' name='city' value='' /></td></tr>
        <tr> <td>State:</td> <td>
                <select name="state" >
                    <?php foreach ($states as $key => $value): ?> 
                        <option value="<?php echo $key; ?>" <?php if ($selectedState == $key): ?> selected="selected" <?php endif; ?>><?php echo $value; ?></option>
                    <?php endforeach; ?>
                </select></td></tr>
        <tr> <td>zip: </td><td><input type ='text' name='zip' value='' /></td></tr>

        <tr> <td>birthday: </td><td><input type ='date' name='birthday' value='' /></td></tr>


        <tr>  </tr>
    </table>
    <input type ='submit' value='submit' class="btn btn-primary" > 
</form>
<?php
?>

