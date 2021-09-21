<?php

    require_once '../includes/DBOperation.php';

    function isTheseParametersAvailable($params)
    {
        $available = true;
        $missingparams = "";

        foreach($params as $param)
        {
            if(!isset($_POST[$param]) || strlen($_POST[$param])<=0)
            {
                $available = false;
                $missingparams = $missingparams . ", " . $param;
            }
        }

        if(!$available)
        {
            $response = array();
            $response['error'] = true;
            $response['message'] = 'Parameters ' . substr($missingparams, 1, strlen(
            $missingparams)) . ' missing';

            echo json_encode($response, JSON_UNESCAPED_UNICODE);

            die();
        }
    }

    $response = array();

    if(isset($_GET['apicall']))
    {
        switch($_GET['apicall'])
        {
            case 'createhero':

                isTheseParametersAvailable(array('name', 'realname', 'rating', 'teamaffiliation'));

                $db = new DBOperation();

                $result = $db->createHero
                (
                    $_POST['name'],
                    $_POST['realname'],
                    $_POST['rating'],
                    $_POST['teamaffiliation']
                );

                if($result)
                {
                    // $response['error'] = false;

                    $response['message'] = 'Herói adicionado com suecesso!!!';

                    // $response['heroes'] = $db->getHeroes();
                }else{

                    // $response['error'] = true;

                    $response['message'] = 'Algum erro ocorreu por favor tente novamente';
                }

            break;

                case 'getheroes':
                    $db = new DBOperation();
                    // $response['error'] = false;
                    $response['message'] = 'Pedido concluído com sucesso!!!';
                    $response['<br /><br />heroes'] = $db->getHeroes();
                break;

                case 'updatehero':
                    isTheseParametersAvailable(array('id', 'name', 'realname', 'rating', 'teamaffiliation'));
                    $db = new DBOperation();
                    $result = $db->updateHero
                    (
                        $_POST['id'],
                        $_POST['name'],
                        $_POST['realname'],
                        $_POST['rating'],
                        $_POST['teamaffiliation']
                    );

                    if($result)
                    {
                        // $response['error'] = false;
                        $response['message'] = 'Herói atualizado com sucesso!!!';
                        // $response['heroes'] = $db->getHeroes();
                    }else{
                        // $response['error'] = true;
                        $response['message'] = 'Algum erro ocorreu por favor tente novamente';
                    }
                break;

                case 'deletehero':

                    if(isset($_GET['id']))
                    {
                        $db = new DBOperation();
                        if($db->deleteHero($_GET['id']))
                        {
                            // $response['error'] = false;
                            $response['message'] = 'Herói excluído com sucesso!!!';
                            // $response['heroes'] = $db->getHeroes();
                        }else{
                                // $response['error'] = true;
                                $response['message'] = 'Algum erro ocorreu por favor tente novamente';
                            }
                    }else{
                            // $response['error'] = true;
                            $response['message'] = 'Não foi possível deletar, forneça um id por favor';
                         }
                break;
        }
    }else{
            // $response['error'] = true;
            $response['message'] = 'Chamada de API inválida';
    }

    echo json_encode($response, JSON_UNESCAPED_UNICODE);