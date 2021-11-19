
.. include:: ../../../Includes.txt

.. _specialView.3946257:
.. role:: red

============
Special view
============

The special view ``FORM_Update`` is a ``formView``
and contains the following configuration.


Item Template
=============

::

   <div class="colLeft">
     <div class="label">$$$label[firstname]$$$</div>
     <div class="field">###field[firstname]###</div>
     <div class="label">$$$label[lastname]$$$</div>
     <div class="field">###field[lastname]###</div>
     <div class="label">$$$label[website]$$$</div>
     <div class="field">###field[website]###</div>
     <div class="label">###button[submit]###</div>
   </div>
   <div class="colRight">
      <div class="label">$$$label[message]$$$</div>
      <div class="field"> ###field[message]###</div>
   </div>

Selected Fields
===============

.. _specialView.3946257.64388392.222419149.tx_savlibraryexample7_guests.firstname:

**Field**: ``firstname``

**Type:** :ref:`String <savlibrarykickstarter:string>`

**Configuration:**

::

  - addedit = 1
  - required = 1
  - checkedinupdateformadmin = 1


.. _specialView.3946257.64388392.222419149.tx_savlibraryexample7_guests.lastname:

**Field**: ``lastname``

**Type:** :ref:`String <savlibrarykickstarter:string>`

**Configuration:**

::

  - addedit = 1
  - required = 1
  - checkedinupdateformadmin = 1


.. _specialView.3946257.64388392.222419149.tx_savlibraryexample7_guests.email:

**Field**: ``email``

**Type:** :ref:`String <savlibrarykickstarter:string>`

.. _specialView.3946257.64388392.222419149.tx_savlibraryexample7_guests.website:

**Field**: ``website``

**Type:** :ref:`Link <savlibrarykickstarter:link>`

**Configuration:**

::

  - addedit = 1
  - checkedinupdateformadmin = 1


.. _specialView.3946257.64388392.222419149.tx_savlibraryexample7_guests.message:

**Field**: ``message``

**Type:** :ref:`Text <savlibrarykickstarter:textarea>`

**Configuration:**

::

  - addedit = 1
  - required = 1
  - checkedinupdateformadmin = 1



