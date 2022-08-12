<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('author_id')->constrained();
            $table->string('comic_name');
            $table->text('description');
            $table->string('type');
            $table->integer('quantity');
            $table->string('ISBN');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->float('price');
            $table->integer('discount')->default(0);
            $table->string('height')->nullable();
            $table->string('width')->nullable();;
            $table->string('length')->nullable();;
            $table->string('language');
            $table->string('publisher');
            $table->boolean('suggest')->default(0);
        });

        DB::table('comics')->insert([
            ['user_id' => '2' , 'author_id' => '1' , 'comic_name' => 'FMA 1' , 'description' => '<p>Quando i fratelli Elric si dilettano dei poteri mistici dell\'alchimia, uno perde un braccio e una gamba e l\'altro diventa nient\'altro che un\'anima chiusa in un corpo di ferro vivente. Ora sono agenti del governo, usano i loro poteri unici per obbedire ai loro ordini ... persino per uccidere. Ma il mondo brulica di spietati alchimisti malvagi, tutti alla ricerca dell\'ultimo tesoro alchemico, la Pietra Filosofale. Teenager.</p>' , 'type' => "shonen" , 'quantity' => '3'  , 'ISBN' => '1234567890' , 'price' => '4.5','discount'=>'10','height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Planet manga', 'suggest' => '1'],
            ['user_id' => '1' , 'author_id' => '3' , 'comic_name' => 'Io sono Iron Man ' , 'description' => '<p>Un genio, miliardario, playboy e filantropo: questo è Tony Stark, il controverso personaggio creato da Stan Lee nel 1959 e che da allora combatte i criminali, super e non, all’interno della scintillante armatura di Iron Man. Abbiamo selezionato quattordici delle sue storie più belle e importanti, per conoscere tutto sull’uomo e sulle sue invenzioni, e le abbiamo raccolte in questo volume insieme a un ricco apparato redazionale. </p> ' , 'type' => "marvel" , 'quantity' => '5'  , 'ISBN' => '1234567890' , 'price' => '4.5','discount'=>'10','height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Panini comics', 'suggest' => '1'],
            ['user_id' => '1' , 'author_id' => '4' , 'comic_name' => 'Topolino 3219' , 'description' => '<p>Nell’ambito di #TOPOESTATEDIRISATE parte la lunga saga “Molti personaggi in: la scatola misteriosa nel luogo misteriosissimo” scritta da Sio.</p> ' , 'type' => "italiano" , 'quantity' => '6'  , 'ISBN' => '1234567890' , 'price' => '6.6','discount'=>'12','height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Panini comics', 'suggest' => '0'],
            ['user_id' => '1' , 'author_id' => '4' , 'comic_name' => 'Pippo 1' , 'description' => '<p>Una raccolta dedicata alle imprevedibili avventure del migliore amico di Topolino! Tra queste, “Pippo e il futuro troppo comodo”, scritta da Augusto Macchetto e disegnata da Giampaolo Soldati.</p> ' , 'type' => "italiano" , 'quantity' => '7'  , 'ISBN' => '1234567890' , 'price' => '6.5','discount'=>'13','height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Panini comics', 'suggest' => '0'],
            ['user_id' => '1' , 'author_id' => '5' , 'comic_name' => 'Superman 1' , 'description' => '<p> Mentre le persone intorno alla Terra scompaiono, una nuova minaccia mette alla prova Superman come mai prima d\'ora! Inoltre, incontra Padre Leone, una figura che svolgerà un ruolo importante nella vita di The Man of Steel.</p> ' , 'type' => "dc" , 'quantity' => '13'  , 'ISBN' => '1234567890' , 'price' => '7.5','discount'=>'9','height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Panini comics', 'suggest' => '0'],
            ['user_id' => '1' , 'author_id' => '5' , 'comic_name' => 'Batman 1' , 'description' => '<p>I metodi di Batman sono sempre stati chiari. Combatte i criminali ovunque li trovi. Vive nell\'ombra. E lavora da solo. Ma mentre Gotham si evolve, anche il Pipistrello deve esserlo.Una coppia di giovani superpotenti che si chiamano Gotham e Gotham Girl si sono uniti alla lotta contro il crimine nella città di Batman. Vogliono tirare Gotham fuori dall\'ombra e diventare più luminoso domani. Ma con due metaumani divini che proteggono la città dalla luce del giorno, Gotham ha ancora bisogno di un cavaliere oscuro?</p> ' , 'type' => "dc" , 'quantity' => '13'  , 'ISBN' => '1234567890' , 'price' => '7.5','discount'=>'9','height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Panini comics', 'suggest' => '1'],
            ['user_id' => '1' , 'author_id' => '5' , 'comic_name' => 'Flash 1' , 'description' => '<p>Colpito da un fulmine e cosparso di sostanze chimiche, l\'agente della polizia scientifica Barry Alien sì è trasformato nell\'uomo più veloce del mondo. Ma ci sono cose che nemmeno Flash può lasciarsi alle spalle. Dopo aver passato anni in cerca di vendetta, uno dei vecchi amici di Flash è tornato, con nuovi nemici sulle sue tracce: un gruppo inarrestabile che pare crescere più in fretta di quanto Flash possa fare per fermarlo. Nella prigione di massima sicurezza nota come Iron Heights, il nemico più pericoloso di Flash pianifica la propria fuga, sognando la vendetta: si prepara a mettere Flash sotto ghiaccio per sempre, spinto da un rancore che Flash nemmeno può immaginare. E nel profondo di Flash stesso, incredibili nuovi poteri sono pronti a scatenarsi: capacità impreviste e inesplorate spinte dalla stessa Forza della Velocità che lo rende capace di correre, e che potrebbero diventare la sua arma migliore... o il suo peggior incubo...</p> ' , 'type' => "dc" , 'quantity' => '13'  , 'ISBN' => '1234567890' , 'price' => '7.5','discount'=>'9','height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Panini comics', 'suggest' => '0'],
            ['user_id' => '2' , 'author_id' => '2' , 'comic_name' => 'One Piece 1' , 'description' => '<p>Edizione speciale per i 20 anni di one piece del Numero 1 della seconda edizione che non può mancare nella vostra collezione.</p> ' , 'type' => "shonen" , 'quantity' => '1'  , 'ISBN' => '1234567890' , 'price' => '4.5','discount'=>'0' ,'height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Planet manga', 'suggest' => '1'],
            ['user_id' => '2' , 'author_id' => '2' , 'comic_name' => 'One Piece 2' , 'description' => '<p>One piece New Edition è un manga edito nella versione italiana dalla Star Comics pubblicato per la prima volta nel febbraio 2002. Si tratta dell\'edizione più accurata e precisa, con correzione di errori di traslitterazione delle versioni precedenti.</p> ' , 'type' => "shonen" , 'quantity' => '1'  , 'ISBN' => '1234567890' , 'price' => '4.5','discount'=>'0' ,'height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Planet manga', 'suggest' => '0'],
            ['user_id' => '2' , 'author_id' => '2' , 'comic_name' => 'One Piece 3' , 'description' => '<p>One piece New Edition è un manga edito nella versione italiana dalla Star Comics pubblicato per la prima volta nel febbraio 2002. Si tratta dell\'edizione più accurata e precisa, con correzione di errori di traslitterazione delle versioni precedenti.</p> ' , 'type' => "shonen" , 'quantity' => '1'  , 'ISBN' => '1234567890' , 'price' => '4.5','discount'=>'0' ,'height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Planet manga', 'suggest' => '0'],
            ['user_id' => '2' , 'author_id' => '2' , 'comic_name' => 'One Piece 4' , 'description' => '<p>One piece New Edition è un manga edito nella versione italiana dalla Star Comics pubblicato per la prima volta nel febbraio 2002. Si tratta dell\'edizione più accurata e precisa, con correzione di errori di traslitterazione delle versioni precedenti.</p> ' , 'type' => "shonen" , 'quantity' => '1'  , 'ISBN' => '1234567890' , 'price' => '4.5','discount'=>'0' ,'height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Planet manga', 'suggest' => '0'],
            ['user_id' => '2' , 'author_id' => '2' , 'comic_name' => 'One Piece 5' , 'description' => '<p>One piece New Edition è un manga edito nella versione italiana dalla Star Comics pubblicato per la prima volta nel febbraio 2002. Si tratta dell\'edizione più accurata e precisa, con correzione di errori di traslitterazione delle versioni precedenti.</p> ' , 'type' => "shonen" , 'quantity' => '1'  , 'ISBN' => '1234567890' , 'price' => '4.5','discount'=>'0' ,'height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Planet manga', 'suggest' => '0'],
            ['user_id' => '1' , 'author_id' => '3' , 'comic_name' => 'Hulk 1' , 'description' => '<p>Pianeta alieno selvaggio. Tribù barbariche oppresse. Imperatore corrotto. Donna guerriera mortale. Gladiatori e schiavi. Asce da battaglia e lanciarazzi. Mostri ed eroi ... e l\'incredibile Hulk!</p> ' , 'type' => "marvel" , 'quantity' => '1'  , 'ISBN' => '1234567890' , 'price' => '4.5','discount'=>'0','height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Panini comics', 'suggest' => '0'],
            ['user_id' => '1' , 'author_id' => '3' , 'comic_name' => 'Thor 1' , 'description' => '<p>In un lontano passato, Thor segue la scia insanguinata degli dei assassinati. Nel presente, il Dio del Tuono scopre una grotta dimenticata che riecheggia con le grida degli dei torturati!</p> ' , 'type' => "marvel" , 'quantity' => '1'  , 'ISBN' => '1234567890' , 'price' => '4.5','discount'=>'0','height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Panini comics', 'suggest' => '0'],
            ['user_id' => '2' , 'author_id' => '6' , 'comic_name' => 'La Scuola di Pizze in Faccia' , 'description' => '<p>Questa nuova raccolta di storie di Zerocalcare, precedentemente apparse sul suo blog, su Wired, su Best Movie, su Repubblica, l’Espresso e altrove, è la più corposa della sua produzione editoriale. Corredata da un preciso sommario cronologico, è impreziosita anche da una nuova storia inedita in tre parti, per un totale di venticinque pagine, in cui l’autore di Rebibbia riflette sul necessario equilibrio tra il suo narrare più impegnato e quello più dégagé. Un libro ricchissimo di contenuti, una raccolta sorprendente.</p> ' , 'type' => "italiano" , 'quantity' => '1'  , 'ISBN' => '1234567890' , 'price' => '4.5','discount'=>'0','height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'ShockDom', 'suggest' => '1'],
            ['user_id' => '1' , 'author_id' => '4' , 'comic_name' => 'Topolino 3286' , 'description' => '<p>Nell’ambito di #TOPOESTATEDIRISATE parte la lunga saga “Molti personaggi in: la scatola misteriosa nel luogo misteriosissimo” scritta da Sio.</p> ' , 'type' => "italiano" , 'quantity' => '1'  , 'ISBN' => '1234567890' , 'price' => '4.5','discount'=>'0','height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Panini comics', 'suggest' => '0'],
            ['user_id' => '1' , 'author_id' => '4' , 'comic_name' => 'Topolino 3287' , 'description' => '<p>Nell’ambito di #TOPOESTATEDIRISATE parte la lunga saga “Molti personaggi in: la scatola misteriosa nel luogo misteriosissimo” scritta da Sio.</p> ' , 'type' => "italiano" , 'quantity' => '1'  , 'ISBN' => '1234567890' , 'price' => '4.5','discount'=>'0','height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Panini comics', 'suggest' => '0'],
            ['user_id' => '1' , 'author_id' => '4' , 'comic_name' => 'Topolino 3288' , 'description' => '<p>Nell’ambito di #TOPOESTATEDIRISATE parte la lunga saga “Molti personaggi in: la scatola misteriosa nel luogo misteriosissimo” scritta da Sio.</p> ' , 'type' => "italiano" , 'quantity' => '1'  , 'ISBN' => '1234567890' , 'price' => '4.5','discount'=>'0','height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Panini comics', 'suggest' => '0'],
            ['user_id' => '1' , 'author_id' => '7' , 'comic_name' => 'The Walking Dead 1' , 'description' => '<p>il vice-sceriffo Rick Grimes, caduto in coma in seguito ad uno scontro a fuoco, si risveglia in un mondo popolato dai non-morti. Alla ricerca della propria famiglia, Rick guiderà un piccolo gruppo di sopravvissuti e, insieme a loro, cercherà di piantare il seme di una nuova società all\'interno della quale tutti dovranno ridefinire il proprio ruolo e stabilire nuove regole.</p> ' , 'type' => "Other" , 'quantity' => '1'  , 'ISBN' => '1234567890' , 'price' => '6.0','discount'=>'0' ,'height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Saldapress', 'suggest' => '1'],
            ['user_id' => '1' , 'author_id' => '7' , 'comic_name' => 'The Walking Dead 2' , 'description' => '<p>il vice-sceriffo Rick Grimes, caduto in coma in seguito ad uno scontro a fuoco, si risveglia in un mondo popolato dai non-morti. Alla ricerca della propria famiglia, Rick guiderà un piccolo gruppo di sopravvissuti e, insieme a loro, cercherà di piantare il seme di una nuova società all\'interno della quale tutti dovranno ridefinire il proprio ruolo e stabilire nuove regole.</p> ' , 'type' => "Other" , 'quantity' => '1'  , 'ISBN' => '1234567890' , 'price' => '6.0','discount'=>'0' ,'height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Saldapress', 'suggest' => '0'],
            ['user_id' => '1' , 'author_id' => '7' , 'comic_name' => 'The Walking Dead 3' , 'description' => '<p>il vice-sceriffo Rick Grimes, caduto in coma in seguito ad uno scontro a fuoco, si risveglia in un mondo popolato dai non-morti. Alla ricerca della propria famiglia, Rick guiderà un piccolo gruppo di sopravvissuti e, insieme a loro, cercherà di piantare il seme di una nuova società all\'interno della quale tutti dovranno ridefinire il proprio ruolo e stabilire nuove regole.</p> ' , 'type' => "Other" , 'quantity' => '1'  , 'ISBN' => '1234567890' , 'price' => '6.0','discount'=>'0' ,'height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Saldapress', 'suggest' => '0'],
            ['user_id' => '1' , 'author_id' => '7' , 'comic_name' => 'The Walking Dead 4' , 'description' => '<p>il vice-sceriffo Rick Grimes, caduto in coma in seguito ad uno scontro a fuoco, si risveglia in un mondo popolato dai non-morti. Alla ricerca della propria famiglia, Rick guiderà un piccolo gruppo di sopravvissuti e, insieme a loro, cercherà di piantare il seme di una nuova società all\'interno della quale tutti dovranno ridefinire il proprio ruolo e stabilire nuove regole.</p> ' , 'type' => "Other" , 'quantity' => '1'  , 'ISBN' => '1234567890' , 'price' => '6.0','discount'=>'0' ,'height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Saldapress', 'suggest' => '0'],
            ['user_id' => '1' , 'author_id' => '7' , 'comic_name' => 'The Walking Dead 5' , 'description' => '<p>l vice-sceriffo Rick Grimes, caduto in coma in seguito ad uno scontro a fuoco, si risveglia in un mondo popolato dai non-morti. Alla ricerca della propria famiglia, Rick guiderà un piccolo gruppo di sopravvissuti e, insieme a loro, cercherà di piantare il seme di una nuova società all\'interno della quale tutti dovranno ridefinire il proprio ruolo e stabilire nuove regole.</p> ' , 'type' => "Other" , 'quantity' => '1'  , 'ISBN' => '1234567890' , 'price' => '6.0','discount'=>'0' ,'height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Saldapress', 'suggest' => '0'],
            ['user_id' => '1' , 'author_id' => '7' , 'comic_name' => 'The Walking Dead 6' , 'description' => '<p>l vice-sceriffo Rick Grimes, caduto in coma in seguito ad uno scontro a fuoco, si risveglia in un mondo popolato dai non-morti. Alla ricerca della propria famiglia, Rick guiderà un piccolo gruppo di sopravvissuti e, insieme a loro, cercherà di piantare il seme di una nuova società all\'interno della quale tutti dovranno ridefinire il proprio ruolo e stabilire nuove regole.</p> ' , 'type' => "Other" , 'quantity' => '1'  , 'ISBN' => '1234567890' , 'price' => '6.0','discount'=>'0' ,'height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Saldapress', 'suggest' => '0'],
            ['user_id' => '1' , 'author_id' => '3' , 'comic_name' => 'Superior Iron Man' , 'description' => '<p>Qual è il prezzo della perfezione? Quanto sareste disposti a pagare? Vuoi essere bello, intelligente, in forma, immortale... in una parola, superiore? Tony Stark ha quello che vuoi - una nuova versione del virus Extremis pronta per essere lanciata a San Francisco. Però il costo sarà altissimo! Ma Daredevil non condivide la visione di Stark - sarà in grado di guidare la rivolta contro questo nuovo, Superior Iron Man?</p> ' , 'type' => "marvel" , 'quantity' => '16'  , 'ISBN' => '1234567845' , 'price' => '5.0','discount'=>'0' ,'height'=>'9' , 'width' => '9' , 'length' => '12','language'=>'italiano','publisher' => 'Panini comics', 'suggest' => '0'],
            ['user_id' => '1' , 'author_id' => '3' , 'comic_name' => 'Spider-Man 1' , 'description' => '<p>Le storie da cui tutto ebbe inizio. Le storie che ci fecero capire che “da grandi poteri derivano grandi responsabilità”, presentate qui per la prima volta in una versione nuova di zecca! Ecco il primo appuntamento con i “Marvel Masterworks”, dedicato all’Uomo Ragno. Classiche avventure che hanno fatto la storia della Marvel Comics, scritte da Stan Lee, disegnate da Steve Ditko e Jack Kirby</p> ' , 'type' => "marvel" , 'quantity' => '16'  , 'ISBN' => '1234565845' , 'price' => '5.3','discount'=>'15' ,'height'=>'9' , 'width' => '9' , 'length' => '12','language'=>'italiano','publisher' => 'Panini comics', 'suggest' => '1'],
            ['user_id' => '1' , 'author_id' => '3' , 'comic_name' => 'Thor 255' , 'description' => '<p>Nella sua ricerca per trovare Odino, Thor dovrà combattere attraverso gli Uomini di pietra di Saturno!</p> ' , 'type' => "marvel" , 'quantity' => '6'  , 'ISBN' => '1254565845' , 'price' => '3.3','discount'=>'5' ,'height'=>'9' , 'width' => '9' , 'length' => '12','language'=>'inglese','publisher' => 'Panini comics', 'suggest' => '1'],
            ['user_id' => '1' , 'author_id' => '5' , 'comic_name' => 'Batman: Io sono Gotham' , 'description' => '<p>Parte della graphic novel del volume uno più acclamata dalla critica, la più venduta e tutta nuova, DC Universe Rebirth</p> ' , 'type' => "dc" , 'quantity' => '3'  , 'ISBN' => '1232567890' , 'price' => '5.5','discount'=>'20','height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Panini comics', 'suggest' => '1'],
            ['user_id' => '1' , 'author_id' => '5' , 'comic_name' => 'Superman: Figlio di Superman' , 'description' => '<p>Quando l\'Uomo d\'acciaio morì difendendo la sua casa adottiva, sembrò che lo spirito di verità e giustizia che rappresentava fosse estinto per sempre. Ma a guardare da fuori c\'era un altro Superman - più vecchio, più saggio, più esperto - con sua moglie, Lois Lane, e il loro figlio, Jonathan Kent.</p> ' , 'type' => "dc" , 'quantity' => '12'  , 'ISBN' => '1232267890' , 'price' => '3.7','discount'=>'0','height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Panini comics', 'suggest' => '0'],
            ['user_id' => '1' , 'author_id' => '5' , 'comic_name' => 'Lanterna Verde 1' , 'description' => '<p>La paura ha un colore. Si tratta del raccapricciante bagliore del giallo, controllato dal totalitarismo del tiranno Sinestro e dalle sue Lanterne Gialle. E ora l\'intero universo si abbevera alla sua sinistra luce. Oa, la casa dei Guardiani e del loro Corpo delle Lanterne Verdi, non esiste più. Al suo posto, al centro dell\'universo, orbita Mondoguerra, casa base di Sinestro. Le Lanterne Verdi sono svanite, lasciando che nessuno si opponga al regno del terrore di Sinestro. Nessuno, eccetto l\'ultima Lanterna: Hal Jordan. Convinto di aver commesso crimini di cui invece non ha colpa, reduce dall\'essere diventato un essere di solo pensiero e volontà, Hal deve ora tornare per riformare il Corpo e liberare tutti dal pugno d\'acciaio del suo a rcinemico. La parola di Sinestro è legge... ma Hal Jordan è il trasgressore per antonomasia!</p> ' , 'type' => "dc" , 'quantity' => '7'  , 'ISBN' => '1634567890' , 'price' => '6.6','discount'=>'10','height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Panini comics', 'suggest' => '0'],
            ['user_id' => '1' , 'author_id' => '5' , 'comic_name' => 'Aquaman 1: Acque Silenti' , 'description' => '<p>Ha perso il suo regno. Ha perso la memoria. Potrebbe anche aver perso la testa. È Arthur Curry, ex re di Atlantide, membro fondatore della Justice League ... e non ha idea di dove si trovi, come sia arrivato lì ... o come fuggire.</p> ' , 'type' => "dc" , 'quantity' => '5'  , 'ISBN' => '1634567800' , 'price' => '4.6','discount'=>'0','height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Panini comics', 'suggest' => '1'],
            ['user_id' => '2' , 'author_id' => '8' , 'comic_name' => 'One Punch Man 1' , 'description' => '<p>L’attesa è finalmente finita… approda in Italia la serie cult realizzata da one e Yusuke murata! Un enorme successo commerciale che ha dato vita a una delle serie animate più seguite degli ultimi anni!</p> ' , 'type' => "seinen" , 'quantity' => '20'  , 'ISBN' => '1639567800' , 'price' => '5','discount'=>'0','height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Planet manga', 'suggest' => '0'],
            ['user_id' => '2' , 'author_id' => '9' , 'comic_name' => 'L\'ospite indesiderato. Kiseiju: 1', 'description' => '<p>Shinichi Izumi è un ragazzo di diciassette anni che vive con suo padre e sua madre in un quartiere tranquillo di Tokyo. Una notte però degli alieni parassiti, dalle sembianze molto simili a quelle dei vermi, invadono la Terra con lo scopo di entrare nel corpo degli esseri umani attraverso naso ed orecchie, in modo da raggiungere il loro cervello e prenderne il controllo.</p> ' , 'type' => "seinen" , 'quantity' => '10'  , 'ISBN' => '1649567801' , 'price' => '4.8','discount'=>'10','height'=>'10' , 'width' => '10' , 'length' => '10','language'=>'italiano','publisher' => 'Planet manga', 'suggest' => '0'],
            ['user_id' => '2' , 'author_id' => '10' , 'comic_name' => 'Tokyo Ghoul 1', 'description' => '<p>Un nuovo grandissimo successo manga che sta spopolando in Giappone e anche in Europa! Il ghoul è un personaggio della tradizione fantastica. Lo si ritrova ne “Le Mille e una notte” e in altri miti del folklore occidentale. È un mostro che si nutre di cadaveri cacciati nei cimiteri e che, usando la magia nera, assorbe le forze delle sue vittime. Ora questi mostri stanno serpeggiando per le strade di Tokyo. E un adolescente tormentato andrà loro incontro, senza sapere che in questo modo comprometterà definitivamente il proprio destino</p> ' , 'type' => "seinen" , 'quantity' => '10'  , 'ISBN' => '1640567801' , 'price' => '5.8','discount'=>'15','height'=>'10' , 'width' => '12' , 'length' => '10','language'=>'italiano','publisher' => 'Planet manga', 'suggest' => '0'],
            ['user_id' => '2' , 'author_id' => '10' , 'comic_name' => 'Tokyo Ghoul 2', 'description' => '<p>Continua il nuovo grandissimo successo manga che sta spopolando in giappone e anche in Europa! Il ghoul è un personaggio della tradizione fantastica. È un mostro che si nutre di cadaveri cacciati nei cimiteri e che, usando la magia nera, assorbe le forze delle sue vittime. Ora questi mostri stanno serpeggiando per le strade di Tokyo. </p> ' , 'type' => "seinen" , 'quantity' => '10'  , 'ISBN' => '1640567802' , 'price' => '5.8','discount'=>'15','height'=>'10' , 'width' => '12' , 'length' => '10','language'=>'italiano','publisher' => 'Planet manga', 'suggest' => '0'],
            ['user_id' => '2' , 'author_id' => '11' , 'comic_name' => 'Ristorante Paradiso', 'description' => '<p>Forse tra le opere che hanno fatto conoscere Natsume Ono al pubblico giapponese, "Ristorante Paradiso" è uno slice of life incentrato su Casetta dell\'Orso, un piccolo ristorante romano attorno al quale gravita un caleidoscopio di personaggi particolari.</p> ' , 'type' => "josei" , 'quantity' => '15'  , 'ISBN' => '1642347802' , 'price' => '4.8','discount'=>'0','height'=>'10' , 'width' => '10' , 'length' => '10','language'=>'italiano','publisher' => 'Planet manga', 'suggest' => '0'],
            ['user_id' => '2' , 'author_id' => '12' , 'comic_name' => 'Lady Oscar. Le rose di Versailles: 6', 'description' => '<p>A seguito di un ammutinamento di alcuni soldati della guardia nazionale, Oscar si rende tristemente conto dell\'inconcepibile stato di miseria in cui versa il popolo francese. A Parigi cominciano a verificarsi atti di insurrezione cittadina; Oscar è stremata dagli impegni quando il generale Jarjayes, suo padre, le presenta una proposta di matrimonio. Venendolo a sapere, André si strugge per la propria differenza di ceto...</p> ' , 'type' => "josei" , 'quantity' => '15'  , 'ISBN' => '1642347802' , 'price' => '4.4','discount'=>'10','height'=>'10' , 'width' => '10' , 'length' => '10','language'=>'italiano','publisher' => 'Planet manga', 'suggest' => '0'],
            ['user_id' => '2' , 'author_id' => '13' , 'comic_name' => 'Banana Fish: 3', 'description' => '<p>Attento alle verità che vuoi conoscere... Una volta che guardi in faccia l\'incubo, potresti non risvegliarti mai più. Ash Lynx è a Los Angeles, dove si cela il segreto di Banana Fish, mentre su di lui cala l\'ombra oscura dell\'ossessione di un uomo. È in arrivo una notte che non sarà dimenticata</p> ' , 'type' => "shojo" , 'quantity' => '5'  , 'ISBN' => '1642356202' , 'price' => '3.2','discount'=>'0','height'=>'5' , 'width' => '5' , 'length' => '8','language'=>'italiano','publisher' => 'Planet manga', 'suggest' => '0'],
            ['user_id' => '1' , 'author_id' => '14' , 'comic_name' => 'Ratman 13', 'description' =>'<p>Il Rat-Man. Io lo chiamo così. È ciò che mi spinge a uscire di notte per combattere il crimine. Mi piacerebbe che un giorno i malviventi sussurrassero il mio nome con timore. Come fanno già con quello di Milly Carlucci. Sono stanco. La notte è sempre troppo lunga. Ma il Rat-Man non mi permette di riposare un solo istante, perché la città ha bisogno di me. Così scivolo tra le ombre. In caccia.</p> ' , 'type' => "italiano" , 'quantity' => '12'  , 'ISBN' => '1532356202' , 'price' => '7.2','discount'=>'5','height'=>'5' , 'width' => '5' , 'length' => '9','language'=>'italiano','publisher' => 'Panini comics', 'suggest' => '0'],
            ['user_id' => '1' , 'author_id' => '15' , 'comic_name' => 'Diseny Omnibus Witch 2', 'description' =>'<p>Will, Irma, Taranee, Cornelia e Hay Lin scoprono che, grazie al monile chiamato Cuore di Kandrakar, possiedono poteri legati agli elementi della natura e possono trasformasi in creature magiche! Mirka Andolfo, grande fan delle W.I.T.C.H. e oggi grande artista, ha realizzato un’inedita copertina e una testimonianza personale dedicata alle cinque streghette. In una nuova edizione, il quarto e ultimo di quattro volumi con tre classiche avventure delle W.I.T.C.H., resa unica dall’artwork componibile dei dorsi.</p> ' , 'type' => "italiano" , 'quantity' => '12'  , 'ISBN' => '1532356205' , 'price' => '4.25','discount'=>'5','height'=>'5' , 'width' => '5' , 'length' => '10','language'=>'italiano','publisher' => 'Panini comics', 'suggest' => '0'],
            ['user_id' => '1' , 'author_id' => '16' , 'comic_name' => 'Calata Capodichino', 'description' =>'<p>C\'è molto traffico sulla Calata Capodichino, la strada che porta all\'aeroporto. Quella mattina l\'uomo uccello si trova proprio lì, dentro un taxi, impegnato in una conversazione piacevole con l\'autista, una persona con cui sente da subito una grande sintonia. Quello che per il protagonista doveva essere un breve tragitto in macchina si rivela qualcosa di più: in quell\'auto l\'uomo uccello affronterà se stesso, attraverso un viaggio, da fermo, imbottigliato nel traffico.</p> ' , 'type' => "italiano" , 'quantity' => '12'  , 'ISBN' => '1532356215' , 'price' => '5.50','discount'=>'0','height'=>'5' , 'width' => '5' , 'length' => '10','language'=>'italiano','publisher' => 'ShockDom', 'suggest' => '0'],
            ['user_id' => '1' , 'author_id' => '16' , 'comic_name' => 'Mezza fetta di limone', 'description' =>'<p>"Avrai anche tu qualcosa a cui sei legato, no? E non parlo di persone, non parlo di animali, non parlo di affetto e non parlo d\'amore: potrebbe anche essere soltanto mezza fetta di limone." "Mezza fetta di limone" è una storia scritta e illustrata da Mattia Labadessa. In questo libro l\'autore racconta la vita dell\'uomo uccello e dei suoi amici Franco e Wilson. Il protagonista, impaurito dall\'ignoto, si rifugia continuamente nelle sue certezze scappando di fronte a ciò che non conosce.</p> ' , 'type' => "italiano" , 'quantity' => '12'  , 'ISBN' => '1572356205' , 'price' => '5.50','discount'=>'5','height'=>'5' , 'width' => '5' , 'length' => '10','language'=>'italiano','publisher' => 'ShockDom', 'suggest' => '0'],
            ['user_id' => '2' , 'author_id' => '6' , 'comic_name' => 'La profezia dell\'armadillo' , 'description' => '<p>Dopo un’edizione autoprodotta andata esauritissima, il primo, introvabile libro di Zerocalcare torna in tutte le librerie e le fumetterie grazie a BAO Publishing, in un\'inedita versione a COLORI curata da Makkox in persona. Le storie autobiografiche, dolciamare di Zerocalcare come non le avete mai viste prima, in un volume divertentissimo, imperdibile.</p> ' , 'type' => "italiano" , 'quantity' => '10'  , 'ISBN' => '1789356202' , 'price' => '4.5','discount'=>'0','height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'ShockDom', 'suggest' => '1'],
            ['user_id' => '2' , 'author_id' => '6' , 'comic_name' => 'Un polpo alla gola' , 'description' => '<p>Dopo lo straordinario successo de La profezia dell’armadillo, Zerocalcare torna con un romanzo grafico lungo e tutto nuovo. Tre capitoli. Tre stagioni della vita del giovane Calcare; le amicizie, le rivalità, i piccoli misteri dell’impresa che è crescere, raccontati nell’impareggiabile stile di Zerocalcare, in un crescendo sincopato di risate e singhiozzi. Un romanzo grafico scanzonato, ma profondo, ironico e amaro come solo la vita guardata da vicino sa essere.</p> ' , 'type' => "italiano" , 'quantity' => '10'  , 'ISBN' => '1789355202' , 'price' => '4.5','discount'=>'0','height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'ShockDom', 'suggest' => '0'],
            ['user_id' => '1' , 'author_id' => '17' , 'comic_name' => 'V For Vendetta' , 'description' => '<p>Una nuova edizione del romanzo grafico che ha ispirato il film di successo! Una storia potente sulla perdita di libertà e individualità, V FOR VENDETTA si svolge in un\'Inghilterra totalitaria a seguito di una guerra devastante che ha cambiato la faccia del pianeta.</p> ' , 'type' => "Other" , 'quantity' => '10'  , 'ISBN' => '6564467890' , 'price' => '15.0','discount'=>'10' ,'height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Saldapress', 'suggest' => '1'],
            ['user_id' => '1' , 'author_id' => '18' , 'comic_name' => 'Il Corvo (Alta fedeltà)' , 'description' => '<p>Quando James O\'Barr riversò il dolore e l\'angoscia della sua tragedia personale nelle pagine del Corvo, la storia catartica del ritorno dal regno dei morti di Eric per vendicare l\'omicidio della fidanzata conquistò i lettori dì tutto il mondo. Ora il libro che diede vita a un film maledetto e leggendario torna in un\'edizione ampliata e corretta direttamente dall\'autore, arricchita di pagine e illustrazioni inedite, nuovi capitoli, sequenze andate perdute ricostruite con la tecnica originale e una introduzione di James O\'Barr in persona. Il potente viaggio di un angelo vendicatore e celebrazione del vero amore... feroce, intelligente e indimenticabile come il giorno in cui è stato concepito.</p> ' , 'type' => "Other" , 'quantity' => '10'  , 'ISBN' => '6164467890' , 'price' => '15.0','discount'=>'10' ,'height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'Saldapress', 'suggest' => '1'],
            ['user_id' => '1' , 'author_id' => '19' , 'comic_name' => 'Tex: Il cavaliere solitario' , 'description' => '<p>Tex dà la caccia a quattro spietati assassini che hanno massacrato una famiglia agricola pacifica, usando le sue abilità investigative, l\'esperienza dei ranger e la forza bruta per rintracciare i suoi obiettivi! Tuttavia, ogni killer è astuto e abile nel suo diritto!</p> ' , 'type' => "Other" , 'quantity' => '15'  , 'ISBN' => '6164567890' , 'price' => '8.0','discount'=>'0' ,'height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => ' Dark Horse Books', 'suggest' => '0'],
            ['user_id' => '1' , 'author_id' => '19' , 'comic_name' => 'Tex. Sangue navajo' , 'description' => '<p>In seguito alla futile uccisione di cinque nativi - colpevoli Sam Hope e Bart Barlow, due gradassi bianchi protetti dal governatore Blister e dal colonnello Elbert - Aquila della Notte, per ottenere giustizia, scatena una rivolta indiana, intraprendendo una serie di azioni di guerriglia che sfiancano l\'esercito fino a ridicolizzarlo. Intanto, grazie al clamore scatenato dagli articoli pubblicati sul "Washington Post" dal giornalista Martin Floyd, dalla capitale giunge l\'ordine di sospendere le azioni militari contro i Navajos. La poltrona del governatore Blister comincerà a traballare, fino a una resa dei conti sotto il sole rovente del deserto</p> ' , 'type' => "Other" , 'quantity' => '15'  , 'ISBN' => '6164567892' , 'price' => '8.0','discount'=>'15' ,'height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => ' Dark Horse Books', 'suggest' => '0'],
            ['user_id' => '1' , 'author_id' => '19' , 'comic_name' => 'Tex. L\'uomo dalle pistole d\'oro' , 'description' => '<p>Sulla frontiera del Rio Grande, Juan Gonzales è tornato dall\'inferno per uccidere i vecchi rangers che lo avevano braccato molti anni prima. Lo scintillare delle sue pistole è come il rintocco di una campana a morto, perché Gonzales non perdona. Gli amici di Carson cadono uno dopo l\'altro. E sulla lista c\'è anche lui, che cavalcherà con Tex sulla pista dell\'uomo dalle pistole d\'oro, in un crescendo di sangue e di violenza.</p> ' , 'type' => "Other" , 'quantity' => '15'  , 'ISBN' => '6164567895' , 'price' => '8.0','discount'=>'0' ,'height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => ' Dark Horse Books', 'suggest' => '0'],
            ['user_id' => '1' , 'author_id' => '20' , 'comic_name' => 'La Belgica 1' , 'description' => '<p>Una vecchia baleniera riadattata per una missione esplorativa estrema. Un equipaggio poco motivato, e dubbioso sull’esito della spedizione. Un capitano tutto d’un pezzo e due esploratori che ancora non sanno di essere destinati a diventare leggendari. L’anno è il 1897 e Jean Jansen non c’entra niente con questa storia, ma si ritrova a bordo e dovrà fare almeno un pezzo di strada con quell’equipaggio. Cercando la strada di casa, troverà il vero senso della sua vita. </p> ' , 'type' => "Other" , 'quantity' => '5'  , 'ISBN' => '6164567895' , 'price' => '4.70','discount'=>'0' ,'height'=>'8' , 'width' => '9' , 'length' => '11','language'=>'italiano','publisher' => 'BAO Publishing', 'suggest' => '0'],
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
}