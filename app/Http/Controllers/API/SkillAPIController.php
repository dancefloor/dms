<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateSkillAPIRequest;
use App\Http\Requests\API\UpdateSkillAPIRequest;
use App\Models\Skill;
use App\Repositories\SkillRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class SkillController
 * @package App\Http\Controllers\API
 */

class SkillAPIController extends AppBaseController
{
    /** @var  SkillRepository */
    private $skillRepository;

    public function __construct(SkillRepository $skillRepo)
    {
        $this->skillRepository = $skillRepo;
    }

    /**
     * Display a listing of the Skill.
     * GET|HEAD /skills
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $skills = $this->skillRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($skills->toArray(), 'Skills retrieved successfully');
    }

    /**
     * Store a newly created Skill in storage.
     * POST /skills
     *
     * @param CreateSkillAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateSkillAPIRequest $request)
    {
        $input = $request->all();

        $skill = $this->skillRepository->create($input);

        return $this->sendResponse($skill->toArray(), 'Skill saved successfully');
    }

    /**
     * Display the specified Skill.
     * GET|HEAD /skills/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Skill $skill */
        $skill = $this->skillRepository->find($id);

        if (empty($skill)) {
            return $this->sendError('Skill not found');
        }

        return $this->sendResponse($skill->toArray(), 'Skill retrieved successfully');
    }

    /**
     * Update the specified Skill in storage.
     * PUT/PATCH /skills/{id}
     *
     * @param int $id
     * @param UpdateSkillAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSkillAPIRequest $request)
    {
        $input = $request->all();

        /** @var Skill $skill */
        $skill = $this->skillRepository->find($id);

        if (empty($skill)) {
            return $this->sendError('Skill not found');
        }

        $skill = $this->skillRepository->update($input, $id);

        return $this->sendResponse($skill->toArray(), 'Skill updated successfully');
    }

    /**
     * Remove the specified Skill from storage.
     * DELETE /skills/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Skill $skill */
        $skill = $this->skillRepository->find($id);

        if (empty($skill)) {
            return $this->sendError('Skill not found');
        }

        $skill->delete();

        return $this->sendSuccess('Skill deleted successfully');
    }
}
