<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    private $arrayPeliculas = [
		[
			"id" => "61",
			"title" => "El padrino",
			"year" => "1972",
			"director" => "Francis Ford Coppola",
			"poster" => "https://pablobedrossian.com/wp-content/uploads/2023/07/el-padrino-ii-03.jpeg",
			"rented" => "0",
			"synopsis" => "Pepito Corleone es el respetado y temido jefe de una de las cinco familias de la mafia de Nueva York. Tiene cuatro hijos: Connie (Talia Shire), el impulsivo Sonny (James Caan), el pusilánime Freddie (John Cazale) y Michael (Al Pacino), que no quiere saber nada de los negocios de su padre. Cuando Corleone, contra de los consejos de 'Il consigliere' Tom Hagen (Robert Duvall), se niega a intervenir en el negocio de las drogas, el jefe de otra banda ordena su asesinato. Empieza entonces una violenta y cruenta guerra entre las familias mafiosas.",
			"created_at" => "2025-03-06 13:10:47",
			"updated_at" => "2025-03-13 11:34:02"
		],
		[
			"id" => "62",
			"title" => "El Padrino. Parte II",
			"year" => "1974",
			"director" => "Francis Ford Coppola",
			"poster" => "https://m.media-amazon.com/images/M/MV5BMjQ5MzQxZTEtMmE1Yy00NjZlLTk5ODItNjI3MWIxMjk1M2U5XkEyXkFqcGc@._V1_.jpg",
			"rented" => "0",
			"synopsis" => "Continuación de la historia de los Corleone por medio de dos historias paralelas: la elección de Michael Corleone como jefe de los negocios familiares y los orígenes del patriarca, el ya fallecido Don Vito, primero en Sicilia y luego en Estados Unidos, donde, empezando desde abajo, llegó a ser un poderosísimo jefe de la mafia de Nueva York.",
			"created_at" => "2025-03-06 13:10:47",
			"updated_at" => "2025-03-06 13:10:47"
		],
		[
			"id" => "63",
			"title" => "La lista de Schindler",
			"year" => "1993",
			"director" => "Steven Spielberg",
			"poster" => "https://pics.filmaffinity.com/La_lista_de_Schindler-473662617-large.jpg",
			"rented" => "0",
			"synopsis" => "Segunda Guerra Mundial (1939-1945). Oskar Schindler (Liam Neeson), un hombre de enorme astucia y talento para las relaciones públicas, organiza un ambicioso plan para ganarse la simpatía de los nazis. Después de la invasión de Polonia por los alemanes (1939), consigue, gracias a sus relaciones con los nazis, la propiedad de una fábrica de Cracovia. Allí emplea a cientos de operarios judíos, cuya explotación le hace prosperar rápidamente. Su gerente (Ben Kingsley), también judío, es el verdadero director en la sombra, pues Schindler carece completamente de conocimientos para dirigir una empresa.",
			"created_at" => "2025-03-06 13:10:47",
			"updated_at" => "2025-03-06 13:10:47"
		],
		[
			"id" => "64",
			"title" => "Pulp Fiction",
			"year" => "1994",
			"director" => "Quentin Tarantino",
			"poster" => "https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExand0NW1xMHJkOTd2MTBnZGl2MGxscDN5dTR1NG5hM3pmY29ucTkwciZlcD12MV9naWZzX3NlYXJjaCZjdD1n/6uGhT1O4sxpi8/giphy.gif",
			"rented" => "1",
			"synopsis" => "Jules y Vincent, dos asesinos a sueldo con muy pocas luces, trabajan para Marsellus Wallace. Vincent le confiesa a Jules que Marsellus le ha pedido que cuide de Mia, su mujer. Jules le recomienda prudencia porque es muy peligroso sobrepasarse con la novia del jefe. Cuando llega la hora de trabajar, ambos deben ponerse manos a la obra. Su misión: recuperar un misterioso maletín.",
			"created_at" => "2025-03-06 13:10:47",
			"updated_at" => "2025-03-13 12:41:44"
		],
		[
			"id" => "65",
			"title" => "Cadena perpetua",
			"year" => "1994",
			"director" => "Frank Darabont",
			"poster" => "https://m.media-amazon.com/images/I/71KKnwXlYhL.jpg",
			"rented" => "1",
			"synopsis" => "Acusado del asesinato de su mujer, Andrew Dufresne (Tim Robbins), tras ser condenado a cadena perpetua, es enviado a la cárcel de Shawshank. Con el paso de los años conseguirá ganarse la confianza del director del centro y el respeto de sus compañeros de prisión, especialmente de Red (Morgan Freeman), el jefe de la mafia de los sobornos.",
			"created_at" => "2025-03-06 13:10:47",
			"updated_at" => "2025-03-06 13:10:47"
		],
		[
			"id" => "66",
			"title" => "El golpe",
			"year" => "1973",
			"director" => "George Roy Hill",
			"poster" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTgfr099t8JgWi1rRMuKEfWdgGlXGcaT4V1Q&s",
			"rented" => "0",
			"synopsis" => "Chicago, años treinta. Redford y Newman son dos timadores que deciden vengar la muerte de un viejo y querido colega, asesinado por orden de un poderoso gángster (Robert Shaw). Para ello urdirán un ingenioso y complicado plan con la ayuda de todos sus amigos y conocidos.",
			"created_at" => "2025-03-06 13:10:47",
			"updated_at" => "2025-03-06 13:10:47"
		],
		[
			"id" => "67",
			"title" => "La vida es bella",
			"year" => "1997",
			"director" => "Roberto Benigni",
			"poster" => "https://es.web.img3.acsta.net/c_310_420/medias/nmedia/18/67/61/66/20098979.jpg",
			"rented" => "1",
			"synopsis" => "En 1939, a punto de estallar la Segunda Guerra Mundial (1939-1945), el extravagante Guido llega a Arezzo (Toscana) con la intención de abrir una librería. Allí conoce a Dora y, a pesar de que es la prometida del fascista Ferruccio, se casa con ella y tiene un hijo. Al estallar la guerra, los tres son internados en un campo de exterminio, donde Guido hará lo imposible para hacer creer a su hijo que la terrible situación que están padeciendo es tan sólo un juego.",
			"created_at" => "2025-03-06 13:10:47",
			"updated_at" => "2025-03-06 13:10:47"
		],
		[
			"id" => "68",
			"title" => "Uno de los nuestros",
			"year" => "1990",
			"director" => "Martin Scorsese",
			"poster" => "https://pics.filmaffinity.com/Uno_de_los_nuestros-343032101-large.jpg",
			"rented" => "0",
			"synopsis" => "Henry Hill, hijo de padre irlandés y madre siciliana, vive en Brooklyn y se siente fascinado por la vida que llevan los gángsters de su barrio, donde la mayoría de los vecinos son inmigrantes. Paul Cicero, el patriarca de la familia Pauline, es el protector del barrio. A los trece años, Henry decide abandonar la escuela y entrar a formar parte de la organización mafiosa como chico de los recados; muy pronto se gana la confianza de sus jefes, gracias a lo cual irá subiendo de categoría.",
			"created_at" => "2025-03-06 13:10:47",
			"updated_at" => "2025-03-06 13:10:47"
		],
		[
			"id" => "69",
			"title" => "Alguien voló sobre el nido del cuco",
			"year" => "1975",
			"director" => "Milos Forman",
			"poster" => "https://imgs.search.brave.com/24ft853TcZBwCOLwiYC4OAh1t6ih9wrgAiNNoErBq0A/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL00v/TFY1QllqZGtOamRs/TkRndFpUTTFNeTAw/WXpFd0xUazVZakl0/WWpFM1l6bGxaVFZp/TlRWbFhrRXlYa0Zx/Y0djQC5qcGc",
			"rented" => "0",
			"synopsis" => "Randle McMurphy (Jack Nicholson), un hombre condenado por asalto, y un espíritu libre que vive contracorriente, es recluido en un hospital psiquiátrico. La inflexible disciplina del centro acentúa su contagiosa tendencia al desorden, que acabará desencadenando una guerra entre los pacientes y el personal de la clínica con la fría y severa enfermera Ratched (Louise Fletcher) a la cabeza. La suerte de cada paciente del pabellón está en juego.",
			"created_at" => "2025-03-06 13:10:47",
			"updated_at" => "2025-03-06 13:10:47"
		],
		[
			"id" => "70",
			"title" => "American History X",
			"year" => "1998",
			"director" => "Tony Kaye",
			"poster" => "https://m.media-amazon.com/images/I/61eLzU3HC4L._AC_UF894,1000_QL80_.jpg",
			"rented" => "0",
			"synopsis" => "Derek (Edward Norton), un joven \"skin head\" californiano de ideología neonazi, fue encarcelado por asesinar a un negro que pretendía robarle su furgoneta. Cuando sale de prisión y regresa a su barrio dispuesto a alejarse del mundo de la violencia, se encuentra con que su hermano pequeño (Edward Furlong), para quien Derek es el modelo a seguir, sigue el mismo camino que a él lo condujo a la cárcel.",
			"created_at" => "2025-03-06 13:10:47",
			"updated_at" => "2025-03-06 13:10:47"
		],
		[
			"id" => "71",
			"title" => "Sin perdón",
			"year" => "1992",
			"director" => "Clint Eastwood",
			"poster" => "https://m.media-amazon.com/images/I/61ELZIraHbL._AC_UF894,1000_QL80_.jpg",
			"rented" => "0",
			"synopsis" => "William Munny (Clint Eastwood) es un pistolero retirado, viudo y padre de familia, que tiene dificultades económicas para sacar adelante a su hijos. Su única salida es hacer un último trabajo. En compañía de un viejo colega (Morgan Freeman) y de un joven inexperto (Jaimz Woolvett), Munny tendrá que matar a dos hombres que cortaron la cara a una prostituta.",
			"created_at" => "2025-03-06 13:10:47",
			"updated_at" => "2025-03-06 13:10:47"
		],
		[
			"id" => "72",
			"title" => "El precio del poder",
			"year" => "1983",
			"director" => "Brian De Palma",
			"poster" => "https://imgs.search.brave.com/AkJUP1MXCR70X3cP4VcKcJJ3ZYkDi3ya1iRUP3hRAvQ/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9zdGF0/aWMucG9zdGVycy5j/ei9pbWFnZS8zNTAv/cG9zdGVycy9lbC1w/cmVjaW8tZGVsLXBv/ZGVyLXNheS1oZWxs/by10by1teS1saXR0/bGUtZnJpZW5kLWkx/MDkyNC5qcGc",
			"rented" => "0",
			"synopsis" => "Tony Montana es un emigrante cubano frío y sanguinario que se instala en Miami con el propósito de convertirse en un gángster importante. Con la colaboración de su amigo Manny Rivera inicia una fulgurante carrera delictiva con el objetivo de acceder a la cúpula de una organización de narcos.",
			"created_at" => "2025-03-06 13:10:47",
			"updated_at" => "2025-03-06 13:10:47"
		],
		[
			"id" => "73",
			"title" => "El pianista",
			"year" => "2002",
			"director" => "Roman Polanski",
			"poster" => "https://pics.filmaffinity.com/El_pianista-978132965-large.jpg",
			"rented" => "1",
			"synopsis" => "Wladyslaw Szpilman, un brillante pianista polaco de origen judío, vive con su familia en el ghetto de Varsovia. Cuando, en 1939, los alemanes invaden Polonia, consigue evitar la deportación gracias a la ayuda de algunos amigos. Pero tendrá que vivir escondido y completamente aislado durante mucho tiempo, y para sobrevivir tendrá que afrontar constantes peligros.",
			"created_at" => "2025-03-06 13:10:47",
			"updated_at" => "2025-03-06 13:10:47"
		],
		[
			"id" => "74",
			"title" => "Seven",
			"year" => "1995",
			"director" => "David Fincher",
			"poster" => "https://m.media-amazon.com/images/I/71zxb01VVWL._AC_UF894,1000_QL80_.jpg",
			"rented" => "1",
			"synopsis" => "El veterano teniente Somerset (Morgan Freeman), del departamento de homicidios, está a punto de jubilarse y ser reemplazado por el ambicioso e impulsivo detective David Mills (Brad Pitt). Ambos tendrán que colaborar en la resolución de una serie de asesinatos cometidos por un psicópata que toma como base la relación de los siete pecados capitales: gula, pereza, soberbia, avaricia, envidia, lujuria e ira. Los cuerpos de las víctimas, sobre los que el asesino se ensaña de manera impúdica, se convertirán para los policías en un enigma que les obligará a viajar al horror y la barbarie más absoluta.",
			"created_at" => "2025-03-06 13:10:47",
			"updated_at" => "2025-03-06 13:10:47"
		],
		[
			"id" => "75",
			"title" => "El silencio de los corderos",
			"year" => "1991",
			"director" => "Jonathan Demme",
			"poster" => "https://pics.filmaffinity.com/El_silencio_de_los_corderos-767447992-large.jpg",
			"rented" => "0",
			"synopsis" => "El FBI busca a \"Buffalo Bill\", un asesino en serie que mata a sus víctimas, todas adolescentes, después de prepararlas minuciosamente y arrancarles la piel. Para poder atraparlo recurren a Clarice Starling, una brillante licenciada universitaria, experta en conductas psicópatas, que aspira a formar parte del FBI. Siguiendo las instrucciones de su jefe, Jack Crawford, Clarice visita la cárcel de alta seguridad donde el gobierno mantiene encerrado a Hannibal Lecter, antiguo psicoanalista y asesino, dotado de una inteligencia superior a la normal. Su misión será intentar sacarle información sobre los patrones de conducta de \"Buffalo Bill\".",
			"created_at" => "2025-03-06 13:10:47",
			"updated_at" => "2025-03-06 13:10:47"
		],
		[
			"id" => "76",
			"title" => "La naranja mecánica",
			"year" => "1971",
			"director" => "Stanley Kubrick",
			"poster" => "https://es.web.img3.acsta.net/pictures/14/03/26/13/26/223510.jpg",
			"rented" => "0",
			"synopsis" => "Gran Bretaña, en un futuro indeterminado. Alex (Malcolm McDowell) es un joven muy agresivo que tiene dos pasiones: la violencia desaforada y Beethoven. Es el jefe de la banda de los drugos, que dan rienda suelta a sus instintos más salvajes apaleando, violando y aterrorizando a la población. Cuando esa escalada de terror llega hasta el asesinato, Alex es detenido y, en prisión, se someterá voluntariamente a una innovadora experiencia de reeducación que pretende anular drásticamente cualquier atisbo de conducta antisocial.",
			"created_at" => "2025-03-06 13:10:47",
			"updated_at" => "2025-03-06 13:10:47"
		],
		[
			"id" => "77",
			"title" => "La chaqueta metálica",
			"year" => "1987",
			"director" => "Stanley Kubrick",
			"poster" => "https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExYzM1ZWtlY3NseDR0Y3dqNmtxZWViczVtOGU4NmZobjV2ZzM1bjVjZSZlcD12MV9naWZzX3NlYXJjaCZjdD1n/ESDkuJS8oy3zQRlnVE/giphy.gif",
			"rented" => "1",
			"synopsis" => "Un grupo de reclutas se prepara en Parish Island, centro de entrenamiento de la marina norteamericana. Allí está el sargento Hartman, duro e implacable, cuya única misión en la vida es endurecer el cuerpo y el alma de los novatos, para que puedan defenderse del enemigo. Pero no todos los jóvenes están preparados para soportar sus métodos.",
			"created_at" => "2025-03-06 13:10:47",
			"updated_at" => "2025-03-13 12:51:17"
		],
		[
			"id" => "78",
			"title" => "Blade Runner",
			"year" => "1982",
			"director" => "Ridley Scott",
			"poster" => "https://media.giphy.com/media/VET3tgDayFtpgBnbRH/giphy.gif?cid=790b7611n8wcpb5jmd2uy4xosfo4pnqmujj7j640fz01g1ll&ep=v1_gifs_search&rid=giphy.gif&ct=g",
			"rented" => "1",
			"synopsis" => "A principios del siglo XXI, la poderosa Tyrell Corporation creó, gracias a los avances de la ingeniería genética, un robot llamado Nexus 6, un ser virtualmente idéntico al hombre pero superior a él en fuerza y agilidad, al que se dio el nombre de Replicante. Estos robots trabajaban como esclavos en las colonias exteriores de la Tierra. Después de la sangrienta rebelión de un equipo de Nexus-6, los Replicantes fueron desterrados de la Tierra. Brigadas especiales de policía, los Blade Runners, tenían órdenes de matar a todos los que no hubieran acatado la condena. Pero a esto no se le llamaba ejecución, se le llamaba \"retiro\".",
			"created_at" => "2025-03-06 13:10:47",
			"updated_at" => "2025-03-13 12:50:44"
		],
		[
			"id" => "79",
			"title" => "Taxi Driver",
			"year" => "1976",
			"director" => "Martin Scorsese",
			"poster" => "https://media.giphy.com/media/3ohfFDrKl5yQuQlgc0/giphy.gif?cid=790b7611xitnzqutkhnk6l9ag5mkipv26w90cqj3a1xgnsp6&ep=v1_gifs_search&rid=giphy.gif&ct=g",
			"rented" => "0",
			"synopsis" => "Para sobrellevar el insomnio crónico que sufre desde su regreso de Vietnam, Travis Bickle (Robert De Niro) trabaja como taxista nocturno en Nueva York. Es un hombre insociable que apenas tiene contacto con los demás, se pasa los días en el cine y vive prendado de Betsy (Cybill Shepherd), una atractiva rubia que trabaja como voluntaria en una campaña política. Pero lo que realmente obsesiona a Travis es comprobar cómo la violencia, la sordidez y la desolación dominan la ciudad. Y un día decide pasar a la acción.",
			"created_at" => "2025-03-06 13:10:47",
			"updated_at" => "2025-03-13 12:50:09"
		],
		[
			"id" => "80",
			"title" => "El club de la lucha",
			"year" => "1999",
			"director" => "David Fincher",
			"poster" => "https://media.giphy.com/media/F66ZHEVmLK2oE/giphy.gif?cid=790b7611lfbyohk50829ci67mv704sryjp6qaiosgf7keth7&ep=v1_gifs_search&rid=giphy.gif&ct=g",
			"rented" => "1",
			"synopsis" => "Un joven hastiado de su gris y monótona vida lucha contra el insomnio. En un viaje en avión conoce a un carismático vendedor de jabón que sostiene una teoría muy particular: el perfeccionismo es cosa de gentes débiles; sólo la autodestrucción hace que la vida merezca la pena. Ambos deciden entonces fundar un club secreto de lucha, donde poder descargar sus frustraciones y su ira, que tendrá un éxito arrollador.",
			"created_at" => "2025-03-06 13:10:47",
			"updated_at" => "2025-03-13 12:42:49"
		],
		[
			"id" => "83",
			"title" => "White Chicks",
			"year" => "2004",
			"director" => "Keenen Ivory Wayans",
			"poster" => "https://media.giphy.com/media/13raYVIdU3Zu48/giphy.gif?cid=ecf05e472d1bgvssef5ljt0fkx5lsgt1tm83cfiz9yenttc8&ep=v1_gifs_related&rid=giphy.gif&ct=g",
			"rented" => "0",
			"synopsis" => "2 niggers travestis la peli",
			"created_at" => "2025-03-13 12:23:25",
			"updated_at" => "2025-03-13 12:40:28"
		]
	];
	
    public function run(): void
    {
        self::seedCatalog();
        $this->command->info('Tabla catalogo inicializada con datos!');
    }
    private function seedCatalog()
    {
        DB::table('movies')->delete();
        foreach ($this->arrayPeliculas as $pelicula) {
            $p=new Movie;
			$p->title=$pelicula['title'];
			$p->year=$pelicula['year'];
			$p->director=$pelicula['director'];
			$p->poster=$pelicula['poster'];
			$p->rented=$pelicula['rented'];
			$p->synopsis=$pelicula['synopsis'];
            $p->save();
        }
    }
}
