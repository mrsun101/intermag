var maxIdSection = 6;
var datasection =
        [
            {id: 1, name: "Канцелярия", sort: 1, status: 1},
            {id: 2, name: "Продукты питания", sort: 1, status: 1},
            {id: 3, name: "Мода", sort: 1, status: 1},
            {id: 4, name: "Бижутерия", sort: 1, status: 1},
            {id: 5, name: "Мебель и интерьер", sort: 1, status: 1},
            {id: 6, name: "Косметика", sort: 1, status: 1}
        ];

function Section(id, name, sort, status)
{
    this.id = id;
    this.name = name;
    this.sort = sort;
    this.status = status ? 1 : 0;
}
var maxIdCategory = 30;
var datacategory = [{id: 1, name: "Бумага для печати", section: 1, sort: 1, status: 1},
    {id: 2, name: "Письменные принадлежности", section: 1, sort: 1, status: 1},
    {id: 3, name: "Степлеры, и пр.", section: 1, sort: 1, status: 1},
    {id: 4, name: "Чернила", section: 1, sort: 1, status: 1},
    {id: 5, name: "Кондитерские изделия", section: 2, sort: 1, status: 1},
    {id: 6, name: "Хлеб", section: 2, sort: 1, status: 1},
    {id: 7, name: "Мясо", section: 2, sort: 1, status: 1},
    {id: 8, name: "Колбасы", section: 2, sort: 1, status: 1},
    {id: 9, name: "Сыры", section: 2, sort: 1, status: 1},
    {id: 10, name: "Консервы", section: 2, sort: 1, status: 1},
    {id: 11, name: "Мужская одежда", section: 3, sort: 1, status: 1},
    {id: 12, name: "Женская одежда", section: 3, sort: 1, status: 1},
    {id: 13, name: "Мужская обувь", section: 3, sort: 1, status: 1},
    {id: 14, name: "Женская обувь", section: 3, sort: 1, status: 1},
    {id: 15, name: "Детская одежда и обувь", section: 3, sort: 1, status: 1},
    {id: 16, name: "Кольцы", section: 4, sort: 1, status: 1},
    {id: 17, name: "Серьги", section: 4, sort: 1, status: 1},
    {id: 18, name: "Колье", section: 4, sort: 1, status: 1},
    {id: 19, name: "Письменные столы, парты", section: 5, sort: 1, status: 1},
    {id: 20, name: "Компьютерные столы", section: 5, sort: 1, status: 1},
    {id: 21, name: "Диваны и кровати", section: 5, sort: 1, status: 1},
    {id: 22, name: "Шкафы", section: 5, sort: 1, status: 1},
    {id: 23, name: "Кресла и стулья", section: 5, sort: 1, status: 1},
    {id: 24, name: "Комоды и тумбы", section: 5, sort: 1, status: 1},
    {id: 25, name: "Детская мебель", section: 5, sort: 1, status: 1},
    {id: 26, name: "Интерьерные элементы", section: 5, sort: 1, status: 1},
    {id: 27, name: "Искуственные цветы", section: 5, sort: 1, status: 1},
    {id: 28, name: "Эксперементальная косметика", section: 6, sort: 1, status: 1},
    {id: 29, name: "Косметические средства для женщин", section: 6, sort: 1, status: 1},
    {id: 30, name: "Косметические средства для мужчин", section: 6, sort: 1, status: 1}];

function Category(id,name,section,sort,status)
{
    this.id = id;
    this.name = name;
    this.section = section;
    this.sort = sort;
    this.status = status ? 1 : 0;
}
var maxIdBrends = 30;
var databrends = [{id: 1, name: "Бренд №1 Секция №1", section: 1, sort: 1, status: 1},
    {id: 2, name: "Бренд №2 Секция №1", section: 1, sort: 1, status: 1},
    {id: 3, name: "Бренд №3 Секция №1", section: 1, sort: 1, status: 1},
    {id: 4, name: "Бренд №4 Секция №1", section: 1, sort: 1, status: 1},
    {id: 5, name: "Бренд №5 Секция №2", section: 2, sort: 1, status: 1},
    {id: 6, name: "Бренд №6 Секция №2", section: 2, sort: 1, status: 1},
    {id: 7, name: "Бренд №7 Секция №2", section: 2, sort: 1, status: 1},
    {id: 8, name: "Бренд №8 Секция №2", section: 2, sort: 1, status: 1},
    {id: 9, name: "Бренд №9 Секция №2", section: 2, sort: 1, status: 1},
    {id: 10, name: "Бренд №10 Секция №2", section: 2, sort: 1, status: 1},
    {id: 11, name: "Бренд №11 Секция №3", section: 3, sort: 1, status: 1},
    {id: 12, name: "Бренд №12 Секция №3", section: 3, sort: 1, status: 1},
    {id: 13, name: "Бренд №13 Секция №3", section: 3, sort: 1, status: 1},
    {id: 14, name: "Бренд №14 Секция №3", section: 3, sort: 1, status: 1},
    {id: 15, name: "Бренд №15 Секция №3", section: 3, sort: 1, status: 1},
    {id: 16, name: "Бренд №16 Секция №4", section: 4, sort: 1, status: 1},
    {id: 17, name: "Бренд №17 Секция №4", section: 4, sort: 1, status: 1},
    {id: 18, name: "Бренд №18 Секция №4", section: 4, sort: 1, status: 1},
    {id: 19, name: "Бренд №19 Секция №5", section: 5, sort: 1, status: 1},
    {id: 20, name: "Бренд №20 Секция №5", section: 5, sort: 1, status: 1},
    {id: 21, name: "Бренд №21 Секция №5", section: 5, sort: 1, status: 1},
    {id: 22, name: "Бренд №22 Секция №5", section: 5, sort: 1, status: 1},
    {id: 23, name: "Бренд №23 Секция №5", section: 5, sort: 1, status: 1},
    {id: 24, name: "Бренд №24 Секция №5", section: 5, sort: 1, status: 1},
    {id: 25, name: "Бренд №25 Секция №5", section: 5, sort: 1, status: 1},
    {id: 26, name: "Бренд №26 Секция №5", section: 5, sort: 1, status: 1},
    {id: 27, name: "Бренд №27 Секция №5", section: 5, sort: 1, status: 1},
    {id: 28, name: "Бренд №28 Секция №6", section: 6, sort: 1, status: 1},
    {id: 29, name: "Бренд №29 Секция №6", section: 6, sort: 1, status: 1},
    {id: 30, name: "Бренд №30 Секция №6", section: 6, sort: 1, status: 1}];

function Brends(id,name,section,sort,status)
{
    this.id = id;
    this.name = name;
    this.section = section;
    this.sort = sort;
    this.status = status ? 1 : 0;
}

function Brend(id,name,section,sort,status)
{
    this.id = id;
    this.name = name;
    this.section = section;
    this.sort = sort;
    this.status = status ? 1 : 0;
}

var maxIdColor = 5;
var datacolor = [{id: 1, name: "Белый", r: 0xFF, g: 0xFF, b: 0xFF, code: "FFFFFF"},
    {id: 2, name: "Черный", r: 0, g: 0, b: 0, code: "000000"},
    {id: 3, name: "Красный", r: 0xFF, g: 0, b: 0, code: "FF0000"},
    {id: 4, name: "Зеленый", r: 0, g: 0xFF, b: 0, code: "00FF00"},
    {id: 5, name: "Синий", r: 0, g: 0, b: 0xFF, code: "0000FF"}];

function Color(id,name,r,g,b,code)
{
    this.id = id;
    this.name = name;
    this.r = r;
    this.g = g;
    this.b = b;
    this.code = code;
}

function getColorById(id)
{
    for (var index in datacolor)
    {        
        if (datacolor[index].id===id)
        {
            return  datacolor[index];
        }
    }
    return false;
}

var maxIdSize = 5;
var datasize = [{id: 1, name: "S"},
    {id: 2, name: "M"},
    {id: 3, name: "L"},
    {id: 4, name: "XL"},
    {id: 5, name: "XXL"}];

function Size(id,name)
{
    this.id = id;
    this.name = name;
}

var dataproducts = [{id:1,name:"Товар №1",fullname:"Товар №1", category: 1, 
                 brend: 1, price:45.59, discont:0, best: 1, discription: "", fulldiscription:"",
                iscolor:1,issize:1,colors: [1,2,5], sizes: [1,3,5] , foto: [{id:1,src:"img/pic2.jpg"}]},
        {id:2,name:"Товар №2",fullname:"Товар №2", category: 1, 
                 brend: 1, price:45.59, discont:0, best: 1, discription: "", fulldiscription:"",
                iscolor:0,issize:1,colors: [1,2,5], sizes: [1,3,5] , foto: []},
        {id:3,name:"Товар №3",fullname:"Товар №3", category: 1, 
                 brend: 1, price:45.59, discont:0, best: 1, discription: "", fulldiscription:"",
                iscolor:1,issize:1,colors: [1,2,5], sizes: [1,3,5] , foto: []},
        {id:4,name:"Товар №4",fullname:"Товар №4", category: 2, 
                 brend: 1, price:45.59, discont:0, best: 1, discription: "", fulldiscription:"",
                iscolor:1,issize:1,colors: [1,2,5], sizes: [1,3,5] , foto: []},
        {id:5,name:"Товар №5",fullname:"Товар №5", category: 1, 
                 brend: 1, price:45.59, discont:0, best: 1, discription: "", fulldiscription:"",
                iscolor:1,issize:1,colors: [1,2,5], sizes: [1,3,5] , foto: []},
        {id:6,name:"Товар №6",fullname:"Товар №6", category: 2, 
                 brend: 1, price:45.59, discont:0, best: 1, discription: "", fulldiscription:"",
                iscolor:1,issize:1,colors: [1,2,5], sizes: [1,3,5] , foto: []},
        {id:7,name:"Товар №7",fullname:"Товар №7", category: 1, 
                 brend: 1, price:45.59, discont:0, best: 1, discription: "", fulldiscription:"",
                iscolor:1,issize:1,colors: [1,2,4], sizes: [1,3,5] , foto: []},
        {id:8,name:"Товар №8",fullname:"Товар №8", category: 3, 
                 brend: 1, price:45.59, discont:0, best: 1, discription: "", fulldiscription:"",
                iscolor:1,issize:1,colors: [1,2,5], sizes: [1,3,5] , foto: []},
        {id:9,name:"Товар №9",fullname:"Товар №9", category: 3, 
                 brend: 1, price:45.59, discont:0, best: 1, discription: "", fulldiscription:"",
                iscolor:1,issize:1,colors: [1,2,5], sizes: [1,3,5] , foto: []},
        {id:10,name:"Товар №10",fullname:"Товар №10", category: 3, 
                 brend: 1, price:45.59, discont:0, best: 1, discription: "", fulldiscription:"",
                iscolor:1,issize:1,colors: [1,2,5], sizes: [1,3,5] , foto: []},
        {id:11,name:"Товар №11",fullname:"Товар №11", category: 3, 
                 brend: 1, price:45.59, discont:0, best: 1, discription: "", fulldiscription:"",
                iscolor:1,issize:1,colors: [1,2,5], sizes: [1,3,5] , foto: []},
        {id:12,name:"Товар №12",fullname:"Товар №12", category: 1, 
                 brend: 1, price:45.59, discont:0, best: 1, discription: "", fulldiscription:"",
                iscolor:1,issize:1,colors: [1,2,5], sizes: [1,3,5] , foto: []},
        {id:13,name:"Товар №13",fullname:"Товар №13", category: 4, 
                 brend: 1, price:45.59, discont:0, best: 1, discription: "", fulldiscription:"",
                iscolor:1,issize:1,colors: [1,2,5], sizes: [1,3,5] , foto: []},
        {id:14,name:"Товар №14",fullname:"Товар №14", category: 2, 
                 brend: 1, price:45.59, discont:0, best: 1, discription: "", fulldiscription:"",
                iscolor:1,issize:1,colors: [1,2,5], sizes: [1,3,5] , foto: []},
        {id:15,name:"Товар №15",fullname:"Товар №15", category: 2, 
                 brend: 1, price:45.59, discont:0, best: 1, discription: "", fulldiscription:"",
                iscolor:1,issize:1,colors: [1,2,5], sizes: [1,3,5] , foto: []},
        {id:16,name:"Товар №16",fullname:"Товар №16", category: 2, 
                 brend: 1, price:45.59, discont:0, best: 1, discription: "", fulldiscription:"",
                iscolor:1,issize:1,colors: [1,2,5], sizes: [1,3,5] , foto: []},
        {id:17,name:"Товар №17",fullname:"Товар №17", category: 2, 
                 brend: 1, price:45.59, discont:0, best: 1, discription: "", fulldiscription:"",
                iscolor:1,issize:1,colors: [1,2,5], sizes: [1,3,5] , foto: []},
        {id:18,name:"Товар №18",fullname:"Товар №18", category: 3, 
                 brend: 1, price:45.59, discont:0, best: 1, discription: "", fulldiscription:"",
                iscolor:1,issize:1,colors: [1,2,5], sizes: [1,3,5] , foto: []},
        {id:19,name:"Товар №19",fullname:"Товар №19", category: 3, 
                 brend: 1, price:45.59, discont:0, best: 1, discription: "", fulldiscription:"",
                iscolor:1,issize:1,colors: [1,2,5], sizes: [1,3,5] , foto: []},
        {id:20,name:"Товар №20",fullname:"Товар №20", category: 4, 
                 brend: 1, price:45.59, discont:0, best: 1, discription: "", fulldiscription:"",
                iscolor:1,issize:1,colors: [1,2,5], sizes: [1,3,5] , foto: []},
        {id:21,name:"Товар №21",fullname:"Товар №21", category: 5, 
                 brend: 1, price:45.59, discont:0, best: 1, discription: "", fulldiscription:"",
                iscolor:1,issize:1,colors: [1,2,5], sizes: [1,3,5] , foto: []},
        {id:22,name:"Товар №22",fullname:"Товар №22", category: 3, 
                 brend: 1, price:45.59, discont:0, best: 1, discription: "", fulldiscription:"",
                iscolor:1,issize:1,colors: [1,2,5], sizes: [1,3,5] , foto: []},
        {id:23,name:"Товар №23",fullname:"Товар №23", category: 1, 
                 brend: 1, price:45.59, discont:0, best: 1, discription: "", fulldiscription:"",
                iscolor:1,issize:1,colors: [1,2,5], sizes: [1,3,5] , foto: []},
        {id:24,name:"Товар №24",fullname:"Товар №24", category: 2, 
                 brend: 1, price:45.59, discont:0, best: 1, discription: "", fulldiscription:"",
                iscolor:1,issize:1,colors: [1,2,5], sizes: [1,3,5] , foto: []},
        {id:25,name:"Товар №25",fullname:"Товар №25", category: 4, 
                 brend: 1, price:45.59, discont:0, best: 1, discription: "", fulldiscription:"",
                iscolor:1,issize:1,colors: [1,2,5], sizes: [1,3,5] , foto: []},
        {id:26,name:"Товар №26",fullname:"Товар №26", category: 4, 
                 brend: 1, price:45.59, discont:0, best: 1, discription: "", fulldiscription:"",
                iscolor:1,issize:1,colors: [1,2,5], sizes: [1,3,5] , foto: []},
        {id:27,name:"Товар №27",fullname:"Товар №27", category: 1, 
                 brend: 1, price:45.59, discont:0, best: 1, discription: "", fulldiscription:"",
                iscolor:1,issize:1,colors: [1,2,5], sizes: [1,3,5] , foto: []},
        {id:28,name:"Товар №28",fullname:"Товар №28", category: 1, 
                 brend: 1, price:45.59, discont:0, best: 1, discription: "", fulldiscription:"",
                iscolor:1,issize:1,colors: [1,2,5], sizes: [1,3,5] , foto: []},
        {id:29,name:"Товар №29",fullname:"Товар №29", category: 1, 
                 brend: 1, price:45.59, discont:0, best: 1, discription: "", fulldiscription:"",
                iscolor:1,issize:1,colors: [1,2,5], sizes: [1,3,5] , foto: []}
        ];
        
       //добавим описания
       dataproducts[0].discription = "Это краткое описание товара №1";
       dataproducts[0].fulldiscription = "Это полное описание товара №1";
       dataproducts[1].discription = "Это краткое описание товара №1";
       dataproducts[1].fulldiscription = "Это полное описание товара №1";
       
       for(var index in dataproducts)
       {
           dataproducts[index].isnew = 1;
           dataproducts[index].status = 1;
       }
        
        function Prodact(id,status,name,fullname,category,brend,price,discont,
                          best,discription,fulldiscription,iscolor,issize,isnew,colors,sizes,foto)
        {
            this.id         = id;
            this.name       = name;
            this.fullname   = fullname;
            this.category   = category;
            this.brend      = brend;
            this.price      = price;
            this.discont    = discont;
            this.best       = best;
            this.discription = discription;
            this.fulldiscription = fulldiscription;
            this.iscolor    = iscolor;
            this.issize    = issize;
            this.isnew      = isnew;
            this.colors     = colors;
            this.sizes      = sizes;
            this.foto       = foto;
            this.status     = status;
        }
        
        function BaseDataPtoduct(Obj)
        {
            return new Prodact(Obj.id,Obj.status,Obj.name,Obj.fullname,Obj.category,Obj.brend,Obj.price,Obj.discont,
                          Obj.best,Obj.discription,Obj.fulldiscription,Obj.iscolor,Obj.issize,Obj.isnew,"","","");
        }
        
        function getProductByID(id)
        {            
            for (var index in dataproducts)
            {                
                if (dataproducts[index].id === id) return dataproducts[index];
            }            
        }
        
        function maxId(arr)
        {
            if (arr.length === 0) return 0;
            maxid = arr[0].id;
            for(var index in arr)
            {
                if (maxid < arr[index].id) maxid = arr[index].id;
            }
            return maxid;
        }
        
        function Foto(id,src,file,isnew,isdel)
        {
            this.id     = id;
            this.src    = src;
            this.file   = file;
            this.isnew  = isnew;
            this.isdel  = isdel;
        }