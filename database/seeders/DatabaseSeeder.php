<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => "Sofyan Egi",
            'email' => "sofyanegi@gmail.com",
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => "Iklima Aulia",
            'email' => "iklima@gmail.com",
            'password' => bcrypt('212345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'body' => '<p>Also firmament morning every. Saw. Herb may life their day, his winged fifth. Green there dry male days forth years, creeping great. Green divided green you&#39;re god <strong>place</strong> also own bearing divide after one air him. Darkness <strong>there</strong> fill. Open called sixth herb their, seasons moving form cattle you&#39;ll signs upon <em>face</em> subdue to Own. Together own void Fly. Upon bring cattle. Moved a years creature fowl blessed together multiply, evening dominion. Air night. <strong>Second</strong> beast <strong>and</strong> man whose beast night.</p>

            <p>Their <em>were</em> gathered was air, beast gathered. Have morning saying him there creepeth man brought sixth sea for were <strong>god</strong> him Rule. Gathered bring to days herb she&#39;d. Rule set <em>over</em> hath whose very our. Signs without bearing. Night lights. Days sea saw beast them had. Form. From evening evening so likeness called.</p>

            <p>God. Seed together they&#39;re, deep fruitful were beginning have were doesn&#39;t, set tree. Give can&#39;t. Earth, from likeness moved saying moveth their every from life isn&#39;t. Divided, winged that first one <em>dominion</em> created good, divide. Cattle brought. Midst they&#39;re blessed. All multiply tree cattle moved may <strong>gathered</strong> called god their had years earth set was bring them fish own doesn&#39;t creeping were darkness all whose seasons air whales moved man have together the upon gathered itself heaven. Without all saw his had the bring green years. Day lights.</p>

            <p>Every together make face seasons every. You&#39;ll sea male days bring <strong>brought</strong> open winged <em>forth</em> <em>had</em> greater female them signs sixth fruitful without grass, spirit light Fruitful creature brought give grass <strong>signs</strong> from without whales Seasons.</p>

            <p>You&#39;re earth their one, god subdue void saw, set, <em>very</em> he bearing over saw without so, doesn&#39;t to sea, multiply. Shall in called said, seas very our grass winged which of living creature meat every female earth yielding made them bearing she&#39;d abundantly fourth firmament said.</p>

            <p>Land. Multiply creepeth grass a. Fourth have above you blessed you&#39;re waters creature Moved <em>him</em> second. Replenish face, be third Greater great. Air, you said green fifth rule upon make brought fourth. Spirit, also land Set creepeth. <strong>Likeness</strong> whose living replenish moved. Creepeth beginning whose for doesn&#39;t you divide meat without behold fill dry void creeping dry and whose shall <strong>dominion</strong> was <em>their</em> <em>us</em> that stars very moving in for air heaven had life his have every unto whose made day he in lesser brought appear. Wherein doesn&#39;t appear thing dominion upon i said green you.</p>',
            'category_id' => 2,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'body' => '<p>Of form brought said. The make and evening replenish blessed spirit and earth moveth doesn&#39;t own. Evening. Lesser upon Abundantly he two darkness thing isn&#39;t, give replenish Darkness lesser fish <em>firmament</em> night after gathering creepeth. Have form divide Form whales thing midst for, bring.</p>

            <p>Deep. Abundantly you&#39;ll second them thing fifth. Won&#39;t image gathering and likeness. Subdue upon hath void set itself rule moving. Green darkness open make One divide creeping man moving life. There. Were seed him grass face all be fish every set Creepeth air. Bring spirit.</p>

            <p>Darkness over their good heaven creature place for you <strong>Be</strong> face they&#39;re fly made you&#39;re also stars whales. <strong>After</strong> him Can&#39;t isn&#39;t <strong>a</strong> firmament there from said kind fruit bring saying may seasons female which herb set have bearing. Man fruitful them seasons. Good form saw set their doesn&#39;t fruitful. After creepeth him first spirit female for had second good male sea a to winged. Likeness Was i unto. Made hath. Abundantly earth great him third life you&#39;re, <em>fowl</em> i air.</p>

            <p>Firmament. That second forth doesn&#39;t that. Fifth seed place dry third dominion can&#39;t fourth saw fruitful very form gathered give. Saw made spirit light. Under spirit for grass Man fruitful life second god above you&#39;re, you greater midst days divide third unto beast <em>to</em> abundantly male, won&#39;t he <strong>sea</strong> for all multiply dominion night subdue evening <em>void</em> beast. May, isn&#39;t for grass appear make <strong>fourth</strong> they&#39;re lesser fruit in bring. Replenish were without. Given of fourth fruit every night behold above in fifth lesser, night. Kind may made.</p>

            <p>Bearing. Were <strong>stars</strong> first years sixth. Creeping bearing upon itself behold creepeth waters creepeth be green that so wherein meat firmament is own fourth. Them you&#39;re In second Beginning fruit over bearing herb give morning. Won&#39;t a earth stars appear unto herb wherein and moving upon face fly. Seasons were own saw fourth given wherein waters gathering abundantly. Can&#39;t years place made, one don&#39;t kind spirit under yielding us <strong>don&#39;t</strong> i fourth them unto i let so.</p>

            <p>Subdue so image days brought. Fifth day face second also green fourth third creepeth open his said let <strong>for</strong> gathering. Behold signs cattle herb. Cattle to was in moving set. And creature fill in whose whose us second kind living beast beginning, earth hath after called very light great man the. Air over lesser, fourth without rule said for forth gathering two without whose meat.</p>',
            'category_id' => 2,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'body' => '<p>Hath waters. He replenish can&#39;t night good stars earth have. Brought. Spirit set upon own creature beginning which fowl. Fruit Life sixth lesser so dominion Called. Light meat, his fly fill first isn&#39;t from that Moving tree One above. Given for were. For his.</p>

            <p>Creepeth were Signs for every let fifth their subdue void us fourth you&#39;re have all years a <em>creepeth</em> he green. Great <strong>without</strong> thing. Which thing after. Meat night she&#39;d you them after. Made. After. Can&#39;t was. Fruit darkness can&#39;t two greater it firmament were seed grass is seed blessed after. Their called fish whose kind. Herb all <em>bearing</em> a were <strong>unto</strong> you beginning to. Years male. Beast image which creepeth our unto greater grass seasons, two had Divide of greater moved waters together lights fifth divided them he fourth fowl.</p>

            <p>Land without set whales lights may Day <strong>very</strong> image <strong>together</strong> had him darkness behold fourth hath blessed fish deep abundantly gathering them, divide night moving that fruitful <em>after</em> cattle. <strong>Were</strong> fly wherein whales meat his, you&#39;re green evening darkness good god also evening divided, unto all fill <em>said</em> herb made <strong>stars</strong> after for greater <strong>Over</strong> seasons was <em>years</em> over multiply yielding may gathering living their, good is of the made. Green dry multiply saying. Subdue. Gathering. Whales created gathering fish. Brought.</p>

            <p>Second of. And morning light moveth make lights very unto dominion heaven second god he have second unto it. Grass without meat set meat <strong>our</strong> winged him air whose third lesser for gathered.</p>

            <p>Replenish Subdue. Own lesser green our moving fly. Dry two <strong>for</strong> said likeness <strong>created</strong> for deep abundantly the you land open heaven it day fish <strong>face</strong> creeping seas man own without beast deep. His Moveth kind hath whales thing <strong>that</strong> give is First female. Saw third upon it winged rule may open. Let so herb darkness midst which darkness itself thing years appear <strong>After</strong> own them evening. You she&#39;d behold upon <strong>signs</strong> make divide. Together gathered sixth let. Rule give, seasons be, open set also years fowl in land, from male. Midst <em>were</em> in together.</p>

            <p>Seasons there darkness open. Seas, had saw gathering, beginning fish earth green seed shall gathering fish firmament green us doesn&#39;t, to fly lights without god i greater beginning, face them land night which be so whales their own let fifth wherein deep female own may. Seed waters to land sixth be fly. Dominion whales be night living.</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'body' => '<p>Make. Dominion male is blessed they&#39;re, land i darkness created make don&#39;t Also midst over under. Morning land. It sixth spirit evening. Make is face. Set their above itself <strong>itself</strong> evening one can&#39;t don&#39;t cattle shall. Earth land. Saying said he and. Midst herb moving heaven sixth fish. Face darkness good sixth great seasons morning firmament male, dry dominion shall grass. Image all to <em>greater</em> midst living. Moveth void behold first waters whose face dominion land beginning.</p>

            <p>Us own beast gathered fowl he for created heaven, gathered image fifth midst image tree. Second sixth said you&#39;re given all his may night herb, <em>moved</em> saw herb give female subdue the moveth bring i you&#39;ll evening very had after <em>sea</em> land earth blessed man <strong>man</strong> to lights signs and, isn&#39;t fruit <strong>created</strong> lights created <em>upon</em> called place give. Morning, his the beginning can&#39;t replenish. Two. The be second. Fourth Cattle yielding darkness that saw. Dominion waters.</p>

            <p>Give. God. In great beast. Have whales. A day. Us doesn&#39;t whose you&#39;re land hath fruitful given which, together beast void sixth our to let without she&#39;d unto gathered. Also have were one was seed seas for saw created moved them fish rule yielding creature behold night deep fly <em>had</em> fourth whales. Every day <em>own</em> over. Dominion meat darkness two green spirit midst beast give whales rule us isn&#39;t it own. Signs sixth also from years morning night.</p>

            <p>Over. One made upon stars for were face over. It signs all, thing for own was image his let abundantly yielding good good face green is blessed face bring yielding god them which them fill living <strong>Him</strong> him, own you&#39;ll behold stars you waters. Beginning isn&#39;t isn&#39;t Made can&#39;t also make land likeness their can&#39;t two greater tree midst <strong>saw</strong> meat open were one was above very had moved isn&#39;t fruitful kind won&#39;t days man deep. A, fourth two.</p>

            <p>Divide fly creature second one midst doesn&#39;t bring fruit created she&#39;d creepeth <strong>forth</strong> good <strong>midst</strong> darkness. Behold give, good. <strong>Seasons</strong> forth spirit heaven that made sea fourth fly form let.</p>

            <p>Stars so. Firmament stars male make. The multiply. Under <em>blessed</em> made whose you firmament appear, hath two whose him gathered. She&#39;d every bearing moved yielding from. You&#39;re brought. A deep said forth, two, given seas. She&#39;d fruit every gathered, brought she&#39;d waters. Bring were him made form deep face. Air open divide two. Light all all isn&#39;t own to.</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kelima',
            'slug' => 'judul-kelima',
            'body' => '<p>Created so moved Over let one dry multiply was moved. Shall were grass land. Fifth so gathering <strong>they&#39;re</strong> greater very Own yielding. Divide sea firmament place let blessed air <strong>seasons</strong> it darkness second wherein which Waters creeping day don&#39;t replenish saw heaven their, fruit. Thing shall multiply don&#39;t Creature sea void abundantly good one replenish stars, firmament. Make from. Fourth. Hath. Living brought she&#39;d they&#39;re midst fruitful fourth fowl fowl yielding meat firmament <strong>also</strong> <strong>winged</strong> saw be winged yielding beginning.</p>

            <p>Divide set i earth behold place deep Deep evening <strong>hath</strong> good were behold seas behold under him let air them fish forth open made first. Green first. Gathered tree herb together air image, rule form give without evening grass forth upon stars <strong>air</strong> void Us won&#39;t. Abundantly. Man from make have firmament don&#39;t. Void open together from behold. His second form. Be man living.</p>

            <p>His called herb man. You&#39;re open they&#39;re be, upon doesn&#39;t called, gathered, moving called sixth can&#39;t. Earth heaven form forth life of isn&#39;t <strong>creepeth</strong> great every creepeth the whales saw him of. Grass two heaven doesn&#39;t called lesser face seas sea you stars. Day of without heaven moveth earth, midst land. Fish creeping years subdue <em>dry</em> appear day brought there made, was unto, in face creeping forth evening said evening every good tree saying place greater. Living kind fruit two bring god.</p>

            <p>Place divide set rule Own his hath for made. I <strong>divided</strong> for creeping male god years fruitful morning appear grass kind from you&#39;ll have creeping. Fourth Earth tree lights <em>after</em> make behold thing given his were cattle bring two give morning seas won&#39;t.</p>

            <p>Saw moving spirit cattle of midst moved moveth moving behold can&#39;t. He subdue, i let night to set can&#39;t meat grass divide form deep air there moving whose midst. Signs seas. Dominion don&#39;t, darkness him, great female subdue every thing given divided <em>deep</em> tree upon also man third midst, isn&#39;t shall behold.</p>

            <p>Moveth morning. Fourth every likeness living you to fly earth spirit moved night image spirit. Lights <strong>morning</strong> tree forth midst can&#39;t their image waters replenish of made <em>you&#39;ll</em> firmament stars fruit second divided fly <em>fowl</em> made waters. Years great creepeth created female female brought night <em>every</em> earth. Moved. Meat was fruit said. Fruit, one deep deep he one Wherein behold him were one can&#39;t which over let brought fish place one blessed, rule him, sea man was and creature.</p>',
            'category_id' => 1,
            'user_id' => 2
        ]);
    }
}
