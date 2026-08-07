.. include:: ../../../../Includes.txt

.. _listView.121294234:
.. role:: red

=========
List view
=========

The view ``ADMIN_List`` contains the following configuration.

Title Bar
=========

::

   <ul>
     <li>###name###</li>
     <li>###email###</li>
     <li>###telephone###</li>
     <li>###usergroup###</li>
   </ul>

Item Template
=============

::

   <ul>
     <li>###name###</li>
     <li>###email###</li>
     <li>###telephone###</li>
     <li>###usergroup###</li>
   </ul>

Selected Fields
===============

.. _listView.121294234.105916969.217895432.fe_users.name:

.. card::
   :class: mb-md-2

  :Field: name

  :Type: :ref:`ShowOnly <yolftypo3/sav-library-kickstarter:showOnly>`

  :Configuration:

  ::

    - func = makeItemLink
    - orderlinkintitle = 1
    - orderlinkintitlesetup = :link:ascdesc


.. _listView.121294234.105916969.217895432.fe_users.email:

.. card::
   :class: mb-md-2

  :Field: email

  :Type: :ref:`ShowOnly <yolftypo3/sav-library-kickstarter:showOnly>`

.. _listView.121294234.105916969.217895432.fe_users.telephone:

.. card::
   :class: mb-md-2

  :Field: telephone

  :Type: :ref:`ShowOnly <yolftypo3/sav-library-kickstarter:showOnly>`

.. _listView.121294234.105916969.217895432.fe_users.usergroup:

.. card::
   :class: mb-md-2

  :Field: usergroup

  :Type: :ref:`ShowOnly <yolftypo3/sav-library-kickstarter:showOnly>`

  :Configuration:

  ::

    - separator = ,