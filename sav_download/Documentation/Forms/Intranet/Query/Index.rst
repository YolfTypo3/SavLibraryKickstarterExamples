.. include:: ../../../Includes.txt

.. _queryIntranet:
.. role:: red

=====
Query
=====

The query ``Query`` contains the following configuration.

 
Main Table
==========

::

   tx_savdownload



 
Foreign Tables
==============

::

   INNER JOIN tx_savdownload_category
     ON tx_savdownload.category = tx_savdownload_category.uid






 
ORDER BY Clause
===============

::

   name, date desc




 
WHERE Tags
==========


**Name:** ``date+``

   
**ORDER BY Clause:**

::

   tx_savdownload.date  
    

**Name:** ``date-``

   
**ORDER BY Clause:**

::

   tx_savdownload.date desc  
    

**Name:** ``category+``

   
**ORDER BY Clause:**

::

   tx_savdownload_category.name  
    

**Name:** ``category-``

   
**ORDER BY Clause:**

::

   tx_savdownload_category.name desc  
    



