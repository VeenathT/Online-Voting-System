function loadData(name) {
if (name=="btn1"){
	document.getElementById("para").innerHTML = "<b>Most Popular Film</b><br><br>Mission:Impossible - Fallout<br>Genere - Action/Thriller";
    document.getElementById("img").src ="images/mi-6_N.jpg";
}
else if (name=="btn2") {
    document.getElementById("para").innerHTML = "<b>Best Picture</b><br><br>Sweeney Todd: The Demon Barber of Fleet Street<br>Genere - Musical/Comedy";
    document.getElementById("img").src ="images/SweeneyTodd_N.jpg";
}
else{
      alert("Invalid!!!");
  }

}