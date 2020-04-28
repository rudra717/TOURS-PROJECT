var p1 = document.querySelector("#t1");
var p2 = document.querySelector("#t2");
var p3 = document.querySelector("#t3");
var button = document.querySelector("#but");
var tour = [
			{
				name: "GOA",
				price: 11999
			},
			{
				name: "LADAKH",
				price: 46999
			},
			{
				name: "RAJASTHAN",
				price: 24999
			},
			{
				name: "DARJEELING",
				price: 27999
			},
			{
				name: "DUBAI",
				price: 43990
			},
			{
				name: "BALI",
				price: 41999
			},
			{
				name: "ANDAMAN",
				price: 34800
			},
			{
				name: "HONG KONG",
				price: 85990
			}
			];
if(button)
{
	button.addEventListener("click", function(){
	var m1 = document.querySelector("#InputTour");
	var tourname = m1.options[m1.selectedIndex].value;
	var m2 = document.querySelector("#InputPersons");
	var persons = m2.options[m2.selectedIndex].value;
	var index;
	var price1;
	//Convert data to Integers
	// tour = parseInt(tour);
	persons = parseInt(persons);
	//Calculate Price
	for(var i=0;i<tour.length;i++)
	{
		if(tourname==tour[i].name)
		{
			index = i;
		}
	}
	price1 = (tour[index].price)*persons;
	p1.textContent = tour[index].price;
	p2.textContent = persons;
	p3.textContent = price1;
});
}