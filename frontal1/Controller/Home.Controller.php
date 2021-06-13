<?php
    Class Home
    {
        public function Inicio()
        {
            $smarty=new Smarty();

            $vec=array();

            $vec={
                ['nombre'=>'Jose', 'pass'=>'123']
            };

            $smarty->assign('datos',$vec);
            $smarty->assing('nombre', 'otra pagina');
            $smarty->display('Home.tpl');
        }
    }
?>