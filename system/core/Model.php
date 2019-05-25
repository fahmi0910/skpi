<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2018, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package CodeIgniter
 * @author  EllisLab Dev Team
 * @copyright   Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright   Copyright (c) 2014 - 2018, British Columbia Institute of Technology (http://bcit.ca/)
 * @license http://opensource.org/licenses/MIT  MIT License
 * @link    https://codeigniter.com
 * @since   Version 1.0.0
 * @filesource
 */
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Model Class
 *
 * @package     CodeIgniter
 * @subpackage  Libraries
 * @category    Libraries
 * @author      EllisLab Dev Team
 * @link        https://codeigniter.com/user_guide/libraries/config.html
 */
class CI_Model
{
    protected $condition;
    /**
     * Class constructor
     *
     * @link    https://github.com/bcit-ci/CodeIgniter/issues/5332
     * @return  void
     */
    public function __construct()
    {
    }

    /**
     * __get magic
     *
     * Allows models to access CI's loaded classes using the same
     * syntax as controllers.
     *
     * @param   string  $key
     */
    public function __get($key)
    {
        // Debugging note:
        //  If you're here because you're getting an error message
        //  saying 'Undefined Property: system/core/Model.php', it's
        //  most likely a typo in your model code.
        return get_instance()->$key;
    }

    public function insert($data, $addcolumn = null)
    {
        if ($addcolumn) {
            foreach ($addcolumn as $index => $value) {
                $data[$index] = $value;
            }
        }
        $result = $this->db->insert($this->table, $data);

        return $result;
    }

    public function get($column = '*')
    {
        $result = $this->db->select($column)->from($this->table);
        if ($this->condition) {
            $result = $this->db->where($this->condition);
        }

        return $result->get()->result();
    }
    
    public function first($column = '*')
    {
        $result = $this->db->select($column)->from($this->table);
        if ($this->condition) {
            $result = $this->db->where($this->condition);
        }

        return $result->get()->row();
    }
    public function find($id, $condition  ='id', $column = '*')
    {
        $result = $this->db->select($column)->from($this->table)->where($condition, $id)->get();

        return $result->row();
    }

    public function updateData($id, $array, $condition = 'id', $addcolumn = null)
    {
        if ($addcolumn) {
            foreach ($addcolumn as $index => $value) {
                $array[$index] = $value;
            }
        }
        $result = $this->db->where($condition, $id)->update($this->table, $array);

        return $result;
    }

    public function delete($id, $condition = 'id')
    {
        $result = $this->db->where($condition, $id)->delete($this->table);

        return $result;
    }
    
    public function where(array $condition)
    {
        $this->condition = $condition;
        return $this;
    }
}
