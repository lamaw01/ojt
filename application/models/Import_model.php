<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Import_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function coreln()
    {
        $count=0;
        $fp = fopen($_FILES['userfile']['tmp_name'],'r') or die("can't open file");
        while($csv_line = fgetcsv($fp,1024))
        {
            $count++;
            if($count == 1)
            {
                continue;
            }//keep this if condition if you want to remove the first row
            for($i = 0, $j = count($csv_line); $i < $j; $i++)
            {
                $insert_csv = array();
                $insert_csv['account_no'] = $csv_line[0];
                $insert_csv['product_code'] = $csv_line[1];
                $insert_csv['open_date'] = $csv_line[2];
                $insert_csv['int_rate'] = $csv_line[3];
                $insert_csv['penalty_rate'] = $csv_line[4];
                $insert_csv['loan_amount'] = $csv_line[5];
                $insert_csv['outstanding_bal'] = $csv_line[6];
                $insert_csv['overdue_principal'] = $csv_line[7];
                $insert_csv['interest_due_amount'] = $csv_line[8];
                $insert_csv['pri_paid'] = $csv_line[9];
                $insert_csv['penalty'] = $csv_line[10];
                $insert_csv['customer_no'] = $csv_line[11];
                $insert_csv['customer_name'] = $csv_line[12];
                $insert_csv['account_name'] = $csv_line[13];
                $insert_csv['account_status'] = $csv_line[14];

            }
            $i++;
            $data = array(
                'account_no' => $insert_csv['account_no'],
                'product_code' => $insert_csv['product_code'],
                'open_date' => $insert_csv['open_date'],
                'int_rate' => $insert_csv['int_rate'],
                'penalty_rate' => $insert_csv['penalty_rate'],
                'loan_amount' => $insert_csv['loan_amount'],
                'outstanding_bal' => $insert_csv['outstanding_bal'],
                'overdue_principal' => $insert_csv['overdue_principal'],
                'interest_due_amount' => $insert_csv['interest_due_amount'],
                'pri_paid' => $insert_csv['pri_paid'],
                'penalty' => $insert_csv['penalty'],
                'customer_no' => $insert_csv['customer_no'],
                'customer_name' => $insert_csv['customer_name'],
                'account_name' => $insert_csv['account_name'],
                'account_status' => $insert_csv['account_status']
               );
            $data['crane_features']=$this->db->insert('coreln', $data);
        }
        fclose($fp) or die("can't close file");
        $data['success']="success";
        return $data;
    }

    function coresv()
    {
        $count=0;
        $fp = fopen($_FILES['userfile']['tmp_name'],'r') or die("can't open file");
        while($csv_line = fgetcsv($fp,1024))
        {
            $count++;
            if($count == 1)
            {
                continue;
            }//keep this if condition if you want to remove the first row
            for($i = 0, $j = count($csv_line); $i < $j; $i++)
            {
                $insert_csv = array();
                $insert_csv['account_no'] = $csv_line[0];
                $insert_csv['product_code'] = $csv_line[1];
                $insert_csv['open_date'] = $csv_line[2];
                $insert_csv['current_bal'] = $csv_line[3];
                $insert_csv['available_bal'] = $csv_line[4];
                $insert_csv['interest'] = $csv_line[5];
                $insert_csv['customer_no'] = $csv_line[6];
                $insert_csv['customer_name'] = $csv_line[7];
                $insert_csv['account_name'] = $csv_line[8];
                $insert_csv['account_status'] = $csv_line[9];


            }
            $i++;
            $data = array(
                'account_no' => $insert_csv['account_no'],
                'product_code' => $insert_csv['product_code'],
                'open_date' => $insert_csv['open_date'],
                'current_bal' => $insert_csv['current_bal'],
                'available_bal' => $insert_csv['available_bal'],
                'interest' => $insert_csv['interest'],
                'customer_no' => $insert_csv['customer_no'],
                'customer_name' => $insert_csv['customer_name'],
                'account_name' => $insert_csv['account_name'],
                'account_status' => $insert_csv['account_status'],
               );
            $data['crane_features']=$this->db->insert('coresv', $data);
        }
        fclose($fp) or die("can't close file");
        $data['success']="success";
        return $data;
    }

    function coretd()
    {
        $count=0;
        $fp = fopen($_FILES['userfile']['tmp_name'],'r') or die("can't open file");
        while($csv_line = fgetcsv($fp,1024))
        {
            $count++;
            if($count == 1)
            {
                continue;
            }//keep this if condition if you want to remove the first row
            for($i = 0, $j = count($csv_line); $i < $j; $i++)
            {
                $insert_csv = array();
                $insert_csv['account_no'] = $csv_line[0];
                $insert_csv['product_code'] = $csv_line[1];
                $insert_csv['open_date'] = $csv_line[2];
                $insert_csv['issue_amount'] = $csv_line[3];
                $insert_csv['principal_amount'] = $csv_line[4];
                $insert_csv['interest'] = $csv_line[5];
                $insert_csv['customer_no'] = $csv_line[6];
                $insert_csv['customer_name'] = $csv_line[7];
                $insert_csv['account_name'] = $csv_line[8];
                $insert_csv['account_status'] = $csv_line[9];


            }
            $i++;
            $data = array(
                'account_no' => $insert_csv['account_no'],
                'product_code' => $insert_csv['product_code'],
                'open_date' => $insert_csv['open_date'],
                'issue_amount' => $insert_csv['issue_amount'],
                'principal_amount' => $insert_csv['principal_amount'],
                'interest' => $insert_csv['interest'],
                'customer_no' => $insert_csv['customer_no'],
                'customer_name' => $insert_csv['customer_name'],
                'account_name' => $insert_csv['account_name'],
                'account_status' => $insert_csv['account_status'],
               );
            $data['crane_features']=$this->db->insert('coretd', $data);
        }
        fclose($fp) or die("can't close file");
        $data['success']="success";
        return $data;
    }

}