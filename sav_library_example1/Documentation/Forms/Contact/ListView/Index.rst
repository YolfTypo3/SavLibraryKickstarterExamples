
.. include:: ../../../Includes.txt

.. _listView.196804370:
.. role:: red

=========
List view
=========

The view ``List`` contains the following configuration.


Item Template
=============

::

   <ul>
     <li class="image">###image###</li>
     <li class="lastName">###lastname###</li>
     <li class="firstName">###firstname###</li>
   </ul>

Selected Fields
===============

.. _listView.196804370.82717130.222419149.tx_savlibraryexample1_members.firstname:

**Field**: ``firstname``

**Type:** :ref:`String <savlibrarykickstarter:string>`

.. _listView.196804370.82717130.222419149.tx_savlibraryexample1_members.lastname:

**Field**: ``lastname``

**Type:** :ref:`String <savlibrarykickstarter:string>`

.. _listView.196804370.82717130.222419149.tx_savlibraryexample1_members.image:

**Field**: ``image``

**Type:** :ref:`Files <savlibrarykickstarter:filesAndImages>`

**Configuration:**

::

  - func = makeItemLink
  - width = 50
  - height = 50



