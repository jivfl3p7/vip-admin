@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h1>Bem vindo, {{ Auth::user()->name ? Auth::user()->name : Auth::user()->username }}</h1>
            <p>Essa plataforma administra todas as compras de slot VIP do meu servidor de Counter-Strike: Global Offensive no IP: <strong>177.54.147.159:27047</strong></p>

            <p><strong>Atualmente apenas compras com itens da Steam são automaticamente processados</strong>, pagamentos via MercadoPago ainda serão feitos manualmente <a href="http://steamcommunity.com/id/de_nerd">comigo via Steam.</a></p>

            <p><strong>1 mês de slot VIP no servidor custa R$ 4,00</strong>. No caso de itens da Steam, o preço considerado de cada item será do mercado OPSkins.</p>

        @if(!Auth::user()->accepted)
            <br>
            <p>Caso você tenha <strong>REAL</strong> interesse em apoiar o servidor ou adquirir o VIP no servidor, <strong>leia atentamente os seguintes pontos</strong>:</p>
            <ul>
                <li>O VIP <strong>não te da imunidade a bans/kicks </strong>ou qualquer regra do servidor.</li>
                <li>O VIP não garante que o servidor estará online e estável 24/7/365, <strong>eventuais manutenções e instabilidades são inevitáveis.</strong></li>
                <li>O VIP <strong>não te da acesso</strong> a administração do servidor.</li>
                <li>Apesar de tudo ser automatizado, erros podem ocorrer, em qualquer caso, <strong>compensações serão feitas.</strong></li>
                <li><strong>Qualquer</strong> mudanca nas trade offers feitas pelo sistema, implicará em <strong>BAN permanente </strong>no servidor. </li>
                <li><strong>Qualquer</strong> tentativa de abuso do sistema implicará em <strong>BAN permanente </strong>no servidor.</li>
                <li>Todas as trade offers feitas por esses sistema <strong><a href="http://steamcommunity.com/id/de_nerd">serão da minha conta</a></strong>, sempre verifique isso antes de aceitar.</li>
                <li>Existe a possibilidade de alguns preços estarem incorretos, neste caso me reservo o direito de alterar qualquer confirmação que esteja com a duração incorreta.</li>
                <li>Esse sistema ainda esta em fase de desenvolvimento, caso voce acha algum bug, <strong>por favor <a href="http://steamcommunity.com/id/de_nerd">reporte diretamente comigo.</a></strong></li>
                <li><strong>Quaisquer problemas que você encontrar na primeira semana do seu VIP, por favor entre em contato diretamente pela <a href="http://steamcommunity.com/id/de_nerd">Steam.</a></strong></li>
            </ul>
            <br>
            <a href="{{ route('accept') }}" class="btn btn-lg btn-primary btn-block">Estou ciente de todas as observações feitas acima</a>
            @else
            <h3>Algumas informações uteis:</h3>
            <ul>
                <li>Esse sistema ainda está em constante desenvolvimento, todo e qualquer tipo de feedback é MUITO apreciado.</li>
                <li>A falta de tempo para desenvolver testes faz esse sistema um pouco instável, sou notificado de TODOS os erros e corrigirei eles o mais rápido possível.</li>
                <li>Novamente, se você tiver algum problema, me adicione na Steam que nos resolveremos da melhor forma possível (sim, eu falo isso bastante).</li>
                <li>Estou trabalhando em traduções para português o mais rápido possível.</li>
                <li>Um "Perguntas Frequentes" será desenvolvido de acordo com as dúvidas que vem aparecendo.</li>
                <li>Eu desenvolvi o sistema totalmente em inglês porque não gosto de português sem pontuação/acentos (meu teclado está configurado para o inglês).</li>
                <li>Esse sistema foi desenvolvido com <a href="https://getbootstrap.com/">Bootstrap</a>, <a href="https://laravel.com/">Laravel</a>, <a href="http://expressjs.com/">ExpressJS</a>, <a href="https://mariadb.org/">MariaDB</a>, <a href="https://www.vultr.com/">Vultr</a>, e 36h de muita paciência nos último 8 dias :)</li>
            </ul>
            <h3>Lista de coisas a serem desenvolvidas ainda:</h3>
            <ol>
                <li>Traduções.</li>
                <li>Testes do código.</li>
                <li>Notificações  via email.</li>
                <li>Filtros e ordenação de itens do inventário.</li>
                <li>Testar versão mobile.</li>
                <li>Tokens de desconto.</li>
                <li>Pagamento via MercadoPago (dependendo da demanda).</li>
            </ol>
            <p><u>Espero que esse sistema quebre a barreira de muitas pessoas de apoiarem meu servidor e me permita manter ele indefinidamente!</u></p>
        @endif
    </div>
@endsection