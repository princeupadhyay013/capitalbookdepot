<?php
$selected_items =($_POST["lang"]);
$selected_items_length= count($selected_items);
$total_price=0;
$course_price = array(
"raintree-mcb"=>"508",
"raintree-literature"=>"256",
"new learner grammar and composition"=>"420",
"math sight"=>"660",
"living science"=>"599",
"our past"=>"65",
"social and political life"=>"65",
"the earth our habitat"=>"55",
"vasant"=>"65",
"bal ram khatha"=>"60",
"vyakaran pushp"=>"535",
"smart byte"=>"515",
"map expert"=>"250",
"single line copy"=>"315",
"single line interleaf copy"=>"135",
"notebook long size"=>"240",
"copy cover"=>"100",
"copy cover long size"=>"36",
"name slip"=>"40",
"sketch notebook big"=>"70",
"oil paster"=>"107",
"graph copy"=>"31",
"ruled paper"=>"38",
"water color tube"=>"102",
"paint brush"=>"140",
"color mixing pallate"=>"42",
"carry bag"=>"25",
);

for($i=0;$i<$selected_items_length;$i++) {
    $total_price= $total_price + $course_price["$selected_items[$i]"];
}

echo "thanks for selecting the items your total amount is " .$total_price;

?>