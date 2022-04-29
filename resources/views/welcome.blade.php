<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src=" {{ asset('js/node_modules/web3.js-browser/build/web3.min.js')}}" ></script>
</head>
<body>
    
    <div id = "accounts">
    </div>


    
    <script>
        let accounts = document.getElementById('accounts');
        
        const init = async() => {
            
            let web3 = new Web3(new Web3.providers.HttpProvider('http://localhost:7545'));
            web3.eth.getAccounts().then(function(allAccounts) {
                for(let i = 0 ; i < allAccounts.length ; i++){

                    web3.eth.getBalance(allAccounts[i]).then(function(res) {
                        accounts.innerHTML += "Compte : "+allAccounts[i]+" <p id = 'solde"+i+"'></p> ";
                        var solde = document.getElementById('solde'+i);
                        solde.innerHTML = "Solde : " ;
                        test = web3.utils.fromWei(res,"ether");
                        solde.innerHTML+=test;

                    })
                    
                }
            })


            web3.eth.sendTransaction({from: '', to: '', value: web3.utils.toWei("5","ether")});


            web3.eth.call({from : '', to: '', data: ''});



            web3.eth.call({from : 'adresse ether', to: 'solidity', data: 'input donnée'})
            .then(console.log);




            web3.eth.call({from : '', to: '', data: web3.utils.sha3('nbrFavoris()').substring(0,10)}).then(console.log);




        }
        init();

    </script>


</body>
</html>