
var app = new Vue({
    el: '#app',
    data: {
        selected_thana: thana_id || 0,
        selected_union: union_id || 0,
        options_thana: [
            { text: '-Select-', value: '0' },
            { text: 'Khilgaon, Dhaka', value: '1'},
            { text: 'Ghatail, Tangail ', value: '2' },
            { text: 'Shaturia, Manikganj', value: '3' },
            { text: 'Nawabganj, Dhaka', value: '4' },
            { text: 'Anowara, Chattogram ', value: '5' },
            { text: 'Shubornochar, Noakhali', value: '6' },
            { text: 'Langodu, Rangamati ', value: '7' },
            { text: 'Dighinala, Khagrachhari ', value: '8' },
            { text: 'Khalishpur, Khulna', value: '9' },
            { text: 'Shyamnagar, Shatkhira', value: '10' },
            { text: 'Magura Pourashova, Magura', value: '11' },
            { text: 'Nachol, Chapai Nawabganj ', value: '12' },
            { text: 'Tanore, Rajshahi', value: '13' },
            { text: 'Shujanagar, Pabna', value: '14' },
            { text: 'Rangpur Sadar, Rangpur', value: '15' },
            { text: 'Roumari, Kurigram', value: '16' },
            { text: 'Parbatipur, Dinajpur', value: '17' },
            { text: 'Nolchiti, Jhalokathi', value: '18' },
            { text: 'Borhanuddin, Bhola', value: '19' },
            { text: 'Madhabpur, Habiganj ', value: '20' },
            { text: 'Nalitabari, Sherpur', value: '21' },
            { text: 'Gouripur, Mymensingh ', value: '22' }
        ],
        options_union_all:{
            0:["-Select-"],
            1:["Ward no- 24", "Ward no- 25", "Ward no- 26"],
            2:["3 Jamuria UP", "7 Digor UP", "11 Dholapara UP","Deula Bari"],
            3:["Baliyati UP", "Horgoj UP", "Dhankora UP"],
            4:["Bandura UP", "Jontrail UP", "Agla UP"],
            5:["1 Boirag", "4 Bot-toli", "11 Jui-dondi"],
            6:["1 Char Jabbar UP", "5 Char Jubli UP", "6 Char Amanullah UP"],
            7:["Atarok chora UP", "Mainimukh UP", "Langodu UP"],
            8:["2 Boalkhali UP", "3 Kobakhali UP", "4 Dighinala UP"],
            9:["Ward -9", "Ward- 11", "Ward - 14"],
            10:["2 Kashimari UP", "5 Koikhali UP", "8 Ishwaripur UP"],
            11:["Ward no- 01", "Ward no- 02", "Ward no- 03","Ward no- 04","Ward no- 05","Ward no- 06","Ward no- 07","Ward no- 08","Ward no- 09"],
            12:["1 Koshba UP", "3 Nachol UP", "4 Nezampur UP"],
            13:["Badhair UP", "Talondo UP", "Shoronjai UP"],
            14:["Nazirganj UP", "Shagorkandi UP", "Dulai UP"],
            15:["Ward no- 1", "Ward no- 3", "Ward no- 4"],
            16:["Char Shoulmari", "Jadur Char", "Daat vanga"],
            17:["Monmothpur", "Mominpur", "Polashbari"],
            18:["Dopdopia UP", "Shubidpur UP", "Mollarhat UP"],
            19:["Gongapur UP", "Kachia UP", "Hasannagar UP"],
            20:["6 Shajahanpur UP", "2 Chowmuhoni UP", "9 Noapara UP"],
            21:["Rajnagar UP", "Nalitabari UP", "Jogania UP"],
            22:["Bokainagar UP", "Gouripur UP", "Ochintopur UP"]

        },
        options_union:[]
    },
    methods:{
        changeThanaId(){
            this.options_union = this.options_union_all[this.selected_thana];
        }
    },
    beforeMount(){
        this.changeThanaId();
    }
});
