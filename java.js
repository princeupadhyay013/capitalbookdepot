var bill_page = document.getElementById("bill_page");
var checkboxes= document.querySelectorAll(".checkbox");
bill_page.onclick=total;

 var course_price = {
    "raintree-mcb":508,
    "raintree-literature":256,
    "new learner grammar and composition":420,
    "math sight":660,
    "living science":599,
    "our past":"65",
    "social and political life":65,
    "the earth our habitat":55,
    "vasant":65,
    "bal ram khatha":60,
    "vyakaran pushp":535,
    "smart byte":515,
    "map expert":250,
    "single line copy":315,
    "single line interleaf copy":135,
    "notebook long size":240,
    "copy cover":100,
    "copy cover long size":36,
    "name slip":40,
    "sketch notebook big":70,
    "oil paster":107,
    "graph copy":31,
    "ruled paper":38,
    "water color tube":102,
    "paint brush":140,
    "color mixing pallate":42,
    "carry bag":25,
};
function total(){
    var total_price= 0;
    for(i=0;i<checkboxes.length;i++){
       if(checkboxes[i].checked==true){
           total_price= total_price + course_price[checkboxes[i].value];
       }
            

    }
    var total =document.getElementById("total");
    total.innerHTML=total_price;
    }