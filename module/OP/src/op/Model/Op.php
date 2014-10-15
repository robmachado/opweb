<?php
namespace Op\Model;

class Op
{
    public $id;
    public $prod_cod;
    public $prod_desc;
    public $pedido;
    public $qtdade;
    public $uni;
    public $cliente;
    public $pedcli;
    public $prodcli;
    public $op_prazo;
    public $op_data;
    public $op_resp;

    public function exchangeArray($data)
    {
        $this->id           = (isset($data['id'])) ? $data['id'] : null;
        $this->prod_cod     = (isset($data['prod_cod'])) ? $data['prod_cod'] : null;
        $this->prod_desc    = (isset($data['prod_desc'])) ? $data['prod_desc'] : null;
        $this->pedido       = (isset($data['pedido'])) ? $data['pedido'] : null;
        $this->qtdade       = (isset($data['qtdade'])) ? $data['qtdade'] : null;
        $this->uni          = (isset($data['uni'])) ? $data['uni'] : null;
        $this->cliente      = (isset($data['cliente'])) ? $data['cliente'] : null;
        $this->pedcli       = (isset($data['pedcli'])) ? $data['pedcli'] : null;
        $this->prodcli      = (isset($data['prodcli'])) ? $data['prodcli'] : null;
        $this->op_prazo     = (isset($data['op_prazo'])) ? $data['op_prazo'] : null;
        $this->op_data      = (isset($data['op_data'])) ? $data['op_data'] : null;
        $this->op_resp      = (isset($data['op_resp'])) ? $data['op_resp'] : null;
    }
}
