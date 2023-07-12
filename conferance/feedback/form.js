function showquestions(){
  

    if(document.getElementById('selectid').value == "tc") {
     //Do something
     document.getElementById("tr").style.display = "block";
     document.getElementById("team_work").style.display = "none";
     document.getElementById("flexability").style.display = "none";
     document.getElementById("time_management").style.display = "none";
     document.getElementById("commitment").style.display = "none";
     document.getElementById("respect").style.display = "none";
     document.getElementById("problem_solving").style.display = "none";
     document.getElementById("rate_leader").style.display = "none";
     document.getElementById("rate_president").style.display = "none";
     document.getElementById("box").style.height="100vh";
     document.getElementById("box").style.marginBottom= "50vh";
    }
  
     else
     {
        document.getElementById("tr").style.display = "none";
        document.getElementById("team_work").style.display = "block";
        document.getElementById("flexability").style.display = "block";
        document.getElementById("time_management").style.display = "block";
        document.getElementById("commitment").style.display = "block";
        document.getElementById("respect").style.display = "block";
        document.getElementById("problem_solving").style.display = "block";
        document.getElementById("rate_leader").style.display = "block";
        document.getElementById("rate_president").style.display = "block";
    }
  }