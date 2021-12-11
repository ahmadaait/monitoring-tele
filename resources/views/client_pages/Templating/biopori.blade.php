@extends('client_pages.Layout.index')
@section('content')
@include('client_pages.Templating.header_device')

<!-- ***** Main Banner Area Start ***** -->
  <!-- ***** Monitoring ***** -->
  <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Biopori Tech</h2>
                        <img src="{{asset('client_side/assets/')}}/images/line-dec.png" alt="waves">
                        <br>
                        
                        <body>
                        <p style="text-align:justify">Ilustrasi pengolahan limbah cair domestik sebelumnya telah dijelaskan , dimana pengolahan air limbah diawali dengan penampungan pada sebuah septictank dan selanjutya dialirkan pada sebuah sistem penyaringan dengan memanfaatkan material pasir hingga diperoleh hasil yang memenuhi standar dan layak untuk dibuang. Namun, metode tersebut dapat dilanjutkan dengan memanfaatkan tanaman air untuk meningkatkan kualitas limbah melalui proses remediasi. Dalam penelitian ini, digunakan sistem wetland dengan memanfaatkan tanaman Akar Wangi (Vetiveria zizanoides). Jenis tanaman air (submerged/amphibiuos plants) yang dapat digunakan untuk lahan basah buatan. 
</p>
<img src="{{asset('client_side/assets/')}}/images/Biopori1.png" alt="waves" width="250" height="400">
<p style="text-align:justify">
                        Filter digunakan sebagai material penyaring limbah blackwater, adapun filter yang digunakan terdiri dari beberapa lapis yaitu lapisan kerikil, lapisan arang, lapisan pasir. Filter tersebut dirancang sedemikian rupa sehingga dapat menyerap kotoran yang ada. Air keluaran dari filter tersebut diatas akan ditampung yang kemudian digunakan sebagai air tanaman yang berfungsi sebagai filter terakhir dengan waktu tinggal. Sistem remediasi dengan tanaman air tersebut disebut dengan sistem wetland. Pada penelitian ini, model fisik dirancang dengan menggunakan gabungan metode filter dan wetland dengan cara menerima aliran limbah blackwater komunal melalui unit filter kemudian dialirkan ke unit wetland. Keluaran dari wetland diharapkan akan menjadi air persawahan atau pertanian (Wulandari, 2018).
</p>
<p style="text-align:justify">Penelitian ini diharapkan mampu meningkatkan kualitas air dari limbah blackwater menjadi air klas 4 standart air pertanian dengan merancang model fisik pengolahan limbah blackwater secara komunal, Memilih jenis filter yang tepat, Mengatur ketebalan dan susunan filter, Memilih jenis tanaman yang tepat untuk limbah blackwater, Meneliti waktu tinggal pada 2 buah tanaman untuk dibandingkan.sehingga didapatkan satu persamaan dan rancangan model fisik yang dapat dilaksanakan secara aktual. Dengan demikian, topik ini masih orisinal untuk diangkat sebagai topik penelitian . Hasil penelitiannya diharapkan mampu memberikan pengetahuan dan pemahaman terhadap pengolahan limbah domestik blackwater secara komunal.
</p>
<img src="{{asset('client_side/assets/')}}/images/Biopori2.png" alt="waves" width="250" height="350">

<p style="text-align:justify">
Tujuan yang akan dicapai dalam program ini adalah:</P><p style="text-align:justify">
Berdasarkan latar belakang dan permasalahan yang ada, maka tujuan dari pengolahan limbah ini adalah:</P><p style="text-align:justify">
1.Untuk meningkatkan kualitas air buangan limbah blackwater menjadi air klas 2.</P><p style="text-align:justify">
2.Untuk mengatur debit buangan limbah rumah tangga komunal dengan menggunakan persamaan model, maka masyarakat dapat menyesuaikan debit limbahnya.
</P><p style="text-align:justify">3.Bahan filter dan wetland mudah didapat dan dilanjutkan ke kolam ikan dan hidroponik yang mudah didapat dan bermanfaat bagi masyarakat.
</P><p style="text-align:justify">4.Memilih wetland yang tepat selain menjernihkan air juga untuk menghilangkan bau, sehingga kesehatan masyarakat sekitar akan tetap terjaga
</P><p style="text-align:justify">5.Sedimentasi dapat langsung digunakan sebagai pupuk tanaman yang dapat bermanfaat untuk penduduk sekitarnya.
</p> 
<img src="{{asset('client_side/assets/')}}/images/Biopori3.png" alt="waves" width="250" height="400">

</body>
                
          
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->
    <!-- ***** Features Item End ***** -->
@endsection