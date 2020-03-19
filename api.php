<?php
function CallAPI($method, $url, $data = false)
{
  $curl = curl_init();
  switch ($method)
  {
      case "POST":
          curl_setopt($curl, CURLOPT_POST, 1);

          if ($data)
              curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
          break;
      case "PUT":
          curl_setopt($curl, CURLOPT_PUT, 1);
          break;
      default:
          if ($data)
              $url = sprintf("%s?%s", $url, http_build_query($data));
  }
  // 4e5f9f5092b92be03d70e54137a7aa70
  // Optional Authentication:
  curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
  curl_setopt($curl, CURLOPT_USERPWD, "username:password");
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

  $result = curl_exec($curl);
  curl_close($curl);
  return $result;
}
$result = CallAPI("GET", "https://data.police.uk/api/crimes-street/all-crime?lat=52.629729&lng=-1.131592&date=2017-01");

$data = json_decode($result);
echo "Count: ", count($data) . "<br /><br />";

foreach ($data as $obj) {
  echo $obj ->location->street->name . "<br />";
}

?>
