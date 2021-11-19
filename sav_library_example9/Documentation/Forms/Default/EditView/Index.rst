
.. include:: ../../../Includes.txt

.. _editView.128029197:
.. role:: red

=========
Edit view
=========


.. _editView.128029197.128029197:

View ``Default``
================

This view contains the following configuration.


Selected Fields
---------------

.. _editView.128029197.128029197.222419149.tx_savlibraryexample9.title:

**Field**: ``title``

**Type:** :ref:`String <savlibrarykickstarter:string>`

.. _editView.128029197.128029197.222419149.tx_savlibraryexample9.graph1:

**Field**: ``graph1``

**Type:** :ref:`RelationManyToManyAsSubform <savlibrarykickstarter:relation_n_n>`

**Configuration:**

::


**Subform Content**

   
   **Field**: ``sun``
   
   **Type:** :ref:`Numeric <savlibrarykickstarter:numeric>`
   
   
   **Field**: ``cloud``
   
   **Type:** :ref:`Numeric <savlibrarykickstarter:numeric>`
   
   
   **Field**: ``rain``
   
   **Type:** :ref:`Numeric <savlibrarykickstarter:numeric>`
   



.. _editView.128029197.128029197.222419149.tx_savlibraryexample9.graph2:

**Field**: ``graph2``

**Type:** :ref:`RelationManyToManyAsSubform <savlibrarykickstarter:relation_n_n>`

**Configuration:**

::

  - adddelete = 1
  - addupdown = 1

**Subform Content**

   
   **Field**: ``label``
   
   **Type:** :ref:`String <savlibrarykickstarter:string>`
   
   
   **Field**: ``value1``
   
   **Type:** :ref:`Numeric <savlibrarykickstarter:numeric>`
   
   
   **Field**: ``value2``
   
   **Type:** :ref:`Numeric <savlibrarykickstarter:numeric>`
   






