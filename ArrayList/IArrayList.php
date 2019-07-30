<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Coa
 */
interface IArrayList extends IHash
{

    /**
     * Sort list using user defined method.
     *
     * @param callable $sort
     * @return void
     */
    public function sort(callable $sort): void;
}
