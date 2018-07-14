var i = 0;

function cytat(){
var ourTable = new Array();
ourTable[0] = '<p style="font-size:20px">"Twoja stara to lewara"</p><p style="font-size:18px">twój stary</p>';
ourTable[1] = '<p id="duze">"Byś sie wziął w końcu do nauki"</p><p style="font-size:18px">twoja stara</p>';
ourTable[2] = '<p id="duze">"Nawet jak będziesz potrząsał we wszystkie świata strony i tak coś pójdzie w kalesony"</p><p style="font-size:18px">- Paulo Coelho</p>';
ourTable[3] = '<p id="duze">"Nikt z nas nie jest prawiczkiem. Życie pierdoli nas wszystkich"</p><p style="font-size:18px">- Kurt Cobain</p>';
ourTable[4] = '<p id="duze">"Jak pierdolić to wszystko naraz"</p><p style="font-size:18px">- Paulo Coelho</p>';
ourTable[5] = '<p id="duze">"Trzymaj się ramy to się nie posramy"</p>Adam Miauczyński<p style="font-size:18px"></p>';
ourTable[6] = '<p id="duze">"Twoje życie staje się lepsze tylko wtedy gdy ty stajesz się lepszy"</p>Brian Tracy<p style="font-size:18px">   </p>';
ourTable[7] = '<p id="duze">"Osoba która twierdzi że coś nie może być zrobione nie powinna przeszkadzać tej, która właśnie to robi"</p><p style="font-size:18px">-chińskie powiedzenie</p>';
ourTable[8] = '<p id="duze">"Ciężkie jest życie na tym ziemskim padole"</p><p style="font-size:18px">Nahuymichata (chiński bezdomny)</p>';
ourTable[9] = '<p id="duze">"Buty nie są po to, żeby szewc miał pracę, tylko po to, żebyśmy mieli w czym chodzić"</p><p style="font-size:18px">JKM</p>';
ourTable[10] = '<p id="duze">"Amerykanie trzymają czerwonych w rezerwatach, a my w parlamentach"</p><p style="font-size:18px">JKM</p>';
ourTable[12] = '<p id="duze">"Mam pełne ręce roboty"</p><p style="font-size:18px">Sasha Grey</p>';
ourTable[11] = '<p id="duze">"Muszę to jakoś przełknąć"</p><p style="font-size:18px">Sasha Grey</p>';
ourTable[13] = '<p id="duze">"aarhgpfppgrarhgpfff"</p><p style="font-size:18px">Sasha Grey</p>';


//i=Math.floor(Math.random()*13+0.5);

document.getElementById('pole').innerHTML = ourTable[i];
i=i+1;
 $("#modulcytat").toggleClass("modulcytat2");

 if (i>=14){
i=0;

 }

}
