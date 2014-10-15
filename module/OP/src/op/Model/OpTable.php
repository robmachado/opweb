<?php
namespace Op\Model;

use Zend\Db\TableGateway\TableGateway;

class OpTable
{
    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }

    public function getOp($id)
    {
        $id  = (int) $id;
        $rowset = $this->tableGateway->select(array('id' => $id));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Não encontrei a OP $id");
        }
        return $row;
    }

    public function saveOp(Op $op)
    {
        $data = array(
            'prod_cod' => $this->prod_cod,
            'prod_desc' => $this->prod_desc,
            'pedido' => $this->pedido,
            'qtdade' => $this->qtdade,
            'uni' => $this->uni,
            'cliente' => $this->cliente,
            'pedcli' => $this->pedcli,
            'prodcli' => $this->prodcli,
            'op_prazo' => $this->op_prazo,
            'op_data' => $this->op_data,
            'op_resp' => $this->op_resp
        );

        $id = (int)$op->id;
        if ($id == 0) {
            $this->tableGateway->insert($data);
        } else {
            if ($this->getOp($id)) {
                $this->tableGateway->update($data, array('id' => $id));
            } else {
                throw new \Exception('Form id does not exist');
            }
        }
    }

    public function deleteOp($id)
    {
        $this->tableGateway->delete(array('id' => $id));
    }
}
