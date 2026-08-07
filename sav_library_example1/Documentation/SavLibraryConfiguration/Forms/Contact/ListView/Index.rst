.. include:: ../../../../Includes.txt

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

.. _listView.196804370.82717130.217895432.tx_savlibraryexample1_members.firstname:

.. card::
   :class: mb-md-2

  :Field: firstname

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

.. _listView.196804370.82717130.217895432.tx_savlibraryexample1_members.lastname:

.. card::
   :class: mb-md-2

  :Field: lastname

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

.. _listView.196804370.82717130.217895432.tx_savlibraryexample1_members.image:

.. card::
   :class: mb-md-2

  :Field: image

  :Type: :ref:`Files <yolftypo3/sav-library-kickstarter:filesAndImages>`

  :Configuration:

  ::

    - func = makeItemLink
    - width = 50
    - height = 50